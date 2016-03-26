<?php
/**
 * Display Measures Engine Report Form
 *
 * Copyright (C) 2010      Brady Miller <brady@sparmy.com>
 * Copyright (C) 2016      Suncoast Connection
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-license.php>.
 *
 * @package OpenEMR
 * @link    http://www.open-emr.org
 * @link    http://SuncoastConnection.com
 * @author  Brady Miller <brady@sparmy.com>
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Sam Likins <sam.likins@wsi-services.com>
 */

// SANITIZE ALL ESCAPES
$sanitize_all_escapes = true;

// STOP FAKE REGISTER GLOBALS
$fake_register_globals = false;

require_once '../globals.php';
require_once $srcdir.'/patient.inc';
require_once $srcdir.'/formatting.inc.php';
require_once $srcdir.'/options.inc.php';
require_once $srcdir.'/formdata.inc.php';
require_once $srcdir.'/clinical_rules.php';
require_once $srcdir.'/report_database.inc';
//require_once $srcdir.'/jsonwrapper/jsonwrapper.php';  // This is a JSON wedge for PHP versions less than 5.2

function existsDefault(&$array, $key, $default = '') {
  if(array_key_exists($key, $array)) {
    $default = trim($array[$key]);
  }

  return $default;
}

$page_titles = array(
  'standard'              => xlt('Standard Measures'),
  'cqm'                   => xlt('Clinical Quality Measures (CQM)'),
  'cqm_2011'              => xlt('Clinical Quality Measures (CQM) - 2011'),
  'cqm_2014'              => xlt('Clinical Quality Measures (CQM) - 2014'),
  'amc'                   => xlt('Automated Measure Calculations (AMC)'),
  'amc_2011'              => xlt('Automated Measure Calculations (AMC) - 2011'),
  'amc_2014_stage1'       => xlt('Automated Measure Calculations (AMC) - 2014 Stage I'),
  'amc_2014_stage2'       => xlt('Automated Measure Calculations (AMC) - 2014 Stage II'),
  'pqrs'                  => xlt('Physician Quality Reporting System'),
  'pqrs_individual_2015'  => xlt('Physician Quality Reporting System -- Measures -- 2015'),
  'pqrs_groups_2015'      => xlt('Physician Quality Reporting System -- Measure Groups -- 2015'),
  'pqrs_individual_2016'  => xlt('Physician Quality Reporting System -- Measures -- 2016'),
  'pqrs_groups_2016'      => xlt('Physician Quality Reporting System -- Measure Groups -- 2016'),
);

// See if showing an old report or creating a new report
$report_id = existsDefault($_GET, 'report_id');

// Collect the back variable, if pertinent
$back_link = existsDefault($_GET, 'back');

// If showing an old report, then collect information
if(!empty($report_id)) {
  $report_view = collectReportDatabase($report_id);
  
  error_log("report_view is ".print_r($report_view,TRUE),0);

  $date_report = $report_view['date_report'];

  
  
  $type_report = (
    in_array(
      $report_view['type'],
      array(
        'pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016',
        'amc', 'amc_2011', 'amc_2014', 'amc_2014_stage1', 'amc_2014_stage2',
        'cqm', 'cqm_2011', 'cqm_2014',
      )
    ) ?
    $report_view['type'] :
    'standard'
  );

  $rule_filter = $report_view['type'];

  if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) {
    $begin_date = $report_view['date_begin'];
  } elseif(in_array($type_report, array('amc', 'amc_2011', 'amc_2014', 'amc_2014_stage1', 'amc_2014_stage2'))) {
    $begin_date = $report_view['date_begin'];
    $labs_manual = $report_view['labs_manual'];
  }

  $target_date = $report_view['date_target'];
  $plan_filter = $report_view['plan'];
  $organize_method = $report_view['organize_mode'];
  $provider  = $report_view['provider'];
  $pat_prov_rel = $report_view['pat_prov_rel'];
  
 /*$myfile = fopen("Fuckingpqrsshit.txt", "w") or die("Unable to open file!");
$txt = $report_view['data'];
fwrite($myfile, $txt);
fclose($myfile);
   error_log("The data is:".wordwrap ( $report_view['data'] ,  80 ));*/
  $dataSheet = json_decode($report_view['data'], true);
  /*error_log("Any json error: ".json_last_error());
      switch (json_last_error()) {
        case JSON_ERROR_NONE:
            error_log("json error:  - No errors");
        break;
        case JSON_ERROR_DEPTH:
            error_log("json error:  - Maximum stack depth exceeded");
        break;
        case JSON_ERROR_STATE_MISMATCH:
            error_log("json error:  - Underflow or the modes mismatch");
        break;
        case JSON_ERROR_CTRL_CHAR:
            error_log("json error:  - Unexpected control character found");
        break;
        case JSON_ERROR_SYNTAX:
            error_log("json error: ' - Syntax error, malformed JSON");
        break;
        case JSON_ERROR_UTF8:
            error_log("json error:  - Malformed UTF-8 characters, possibly incorrectly encoded");
        break;
        default:
            error_log("json error: ' - Unknown error");
        break;
    }
    */
  
  
  
  
  $page_subtitle = ' - '.xlt('Date of Report').': '.text($date_report);
  $dis_text = ' disabled="disabled" ';

} else {
  // Collect report type parameter (standard, amc, cqm)
  // Note that need to convert amc_2011 and amc_2014 to amc and cqm_2011 and cqm_2014 to cqm
  // to simplify for when submitting for a new report.
  $type_report = existsDefault($_GET, 'type', 'standard');
  $rule_filter = existsDefault($_POST, 'form_rule_filter', $type_report);

  if(in_array($type_report, array('pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) {
    $type_report = 'pqrs';
  } elseif(in_array($type_report, array('cqm_2011', 'cqm_2014'))) {
    $type_report = 'cqm';
  } elseif(in_array($type_report, array('amc_2011', 'amc_2014', 'amc_2014_stage1', 'amc_2014_stage2'))) {
    $type_report = 'amc';
  }

  // Collect form parameters (set defaults if empty)
  if($type_report == 'pqrs') {
    $begin_date = existsDefault($_POST, 'form_begin_date', '2015-01-01 00:00:00');  //change defaults in 2016
  } elseif($type_report == 'amc') {
    $begin_date = existsDefault($_POST, 'form_begin_date');
    $labs_manual = existsDefault($_POST, 'labs_manual_entry', '0');
  }

  if($type_report == 'pqrs') {
    $target_date = existsDefault($_POST, 'form_target_date', '2015-12-31 23:59:59');  //change defaults in 2016
  } else {
    $target_date = existsDefault($_POST, 'form_target_date', date('Y-m-d H:i:s'));
  }
  $plan_filter = existsDefault($_POST, 'form_plan_filter', '');
  $organize_method = (empty($plan_filter)) ? 'default' : 'plans';
  $provider = trim(existsDefault($_POST, 'form_provider', ''));
  $pat_prov_rel = (empty($_POST['form_pat_prov_rel'])) ? 'encounter' : trim($_POST['form_pat_prov_rel']);
  $page_subtitle = '';
  $dis_text = '';
}

$widthDyn = (in_array($type_report, array('cqm', 'cqm_2011', 'cqm_2014')) ? '410px' : '470px');  //determine what is needed for pqrs

?>
<html>
  <head>
<?php html_header_show();?>
    <link rel="stylesheet" href="<?php echo $css_header;?>" type="text/css">  <!--should include stylesheet in project-->
    <title><?php echo $page_titles[$type_report]; ?></title>
    <script type="text/javascript" src="../../library/overlib_mini.js"></script>
    <script type="text/javascript" src="../../library/textformat.js"></script>
    <script type="text/javascript" src="../../library/dialog.js"></script>
    <script type="text/javascript" src="../../library/js/jquery.1.3.2.js"></script>
    <script language="JavaScript">
var mypcc = '<?php echo text($GLOBALS['phone_country_code']) ?>';

$(document).ready(function() {
  var win = top.printLogSetup ? top : openemr.top;
  win.printLogSetup(document.getElementById('printbutton'));
});

function runReport() {
  // Validate first
  if(!validateForm()) {
    alert("<?php echo xls('Rule Set and Plan Set selections are not consistent. Please fix and Submit again.'); ?>");
    return false;
  }

  // Showing processing wheel
  $("#processing").show();

  // hide Submit buttons
  $("#submit_button").hide();
  $("#xmla_button").hide();
  $("#xmlb_button").hide();
  $("#xmlc_button").hide();
  $("#print_button").hide();
  $("#genQRDA").hide();

  // hide instructions
  $("#instructions_text").hide();

  // Collect an id string via an ajax request
  top.restoreSession();
  $.get(
    "../../library/ajax/collect_new_report_id.php",
    function(data) {
      // Set the report id in page form
      $("#form_new_report_id").attr("value", data);

      // Start collection status checks
      collectStatus($("#form_new_report_id").val());

      // Run the report
      top.restoreSession();
      $.post(
        "../../library/ajax/execute_clinical_measures_report.php",
        {
          provider: $("#form_provider").val(),
          type: $("#form_rule_filter").val(),
          date_target: $("#form_target_date").val(),
          date_begin: $("#form_begin_date").val(),
          plan: $("#form_plan_filter").val(),
          labs: $("#labs_manual_entry").val(),
          pat_prov_rel: $("#form_pat_prov_rel").val(),
          execute_report_id: $("#form_new_report_id").val()
        }
      );
    }
  );
}

function collectStatus(report_id) {
  // Collect the status string via an ajax request and place in DOM at timed intervals
  top.restoreSession();

  // Do not send the skip_timeout_reset parameter, so don't close window before report is done.
  $.post(
    "../../library/ajax/status_report.php",
    { status_report_id: report_id },
    function(data) {
      if(data == "PENDING") {
        // Place the pending string in the DOM
        $('#status_span').replaceWith("<span id='status_span'><?php echo xlt('Preparing To Run Report'); ?></span>");
      } else if(data == "COMPLETE") {
        // Go into the results page
        top.restoreSession();
        link_report = "clinical_measures.php?report_id="+report_id;
        window.open(link_report, '_self', false);
        $("#processing").hide();
        $('#status_span').replaceWith("<a id='view_button' href='?report_id="+report_id+"' class='css_button' onclick='top.restoreSession()'><span><?php echo xlt('View Report'); ?></span></a>");
      } else {
        // Place the string in the DOM
        $('#status_span').replaceWith("<span id='status_span'>"+data+"</span>");
      }
    }
  );

  // run status check every 10 seconds
  var repeater = setTimeout("collectStatus("+report_id+")", 10000);
}

function GenXml(sNested) {
// PQRS TEAM NOTE: !! Important for XML generation !!

  top.restoreSession();

  // QRDA Category III Export
  if(sNested == "PQRS") {
    var form_rule_filter = theform.form_rule_filter.value;
// TODO: perameters need to be reviewed
    var sLoc = '../../custom/export_registry_xml.php?target_date='+theform.form_target_date.value+'&form_provider='+theform.form_provider.value+"&report_id=<?php echo attr($report_id); ?>";
  } else if(sNested == "QRDA") {
    var form_rule_filter = theform.form_rule_filter.value;
    var sLoc = '../../custom/export_qrda_xml.php?target_date='+theform.form_target_date.value+'&qrda_version=3&rule_filter=cqm_2014&form_provider='+theform.form_provider.value+"&report_id=<?php echo attr($report_id); ?>";
  } else {
    var sLoc = '../../custom/export_registry_xml.php?&target_date='+theform.form_target_date.value+'&nested='+sNested;
  }

  dlgopen(sLoc, '_blank', 600, 500);

  return false;
}

// QRDA I - 2014 Download
function downloadQRDA() {
  top.restoreSession();

  var reportID = '<?php echo attr($report_id); ?>';
  var provider = $("#form_provider").val();

  sLoc = '../../custom/download_qrda.php?&report_id='+reportID+'&provider_id='+provider;

  dlgopen(sLoc, '_blank', 600, 500);
}

function validateForm() {
<?php if(empty($report_id) && $type_report == 'cqm') { ?>
  // If this is a cqm and plan set not set to ignore, then need to ensure consistent with the rules set
  if($("#form_plan_filter").val() != '') {
    if($("#form_rule_filter").val() == $("#form_plan_filter").val()) {
      return true;
    } else {
      return false;
    }
  } else {
    return true;
  }
<?php } else { ?>
  return true;
<?php } ?>
}

function Form_Validate() {
<?php if(empty($report_id) && in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016', 'amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
  var d = document.forms[0];

  FromDate = d.form_begin_date.value;
  ToDate = d.form_target_date.value;

  if(FromDate.length > 0 && ToDate.length > 0) {
    if(FromDate > ToDate) {
      alert("<?php echo xls('End date must be later than Begin date!'); ?>");
      return false;
    }
  }

<?php
    }

    if($report_id != '') {
?>
  // For Results are in Gray Background & disabling anchor links
  $("#report_results").css("opacity", '0.4');
  $("#report_results").css("filter", 'alpha(opacity=40)');
  $("a").removeAttr("href");

<?php } ?>
  $("#form_refresh").attr("value","true");

  runReport();

  return true;
}
    </script>
    <style type="text/css">
/* specifically include & exclude from printing */
@media print {
  #report_parameters {
    visibility: hidden;
    display: none;
  }
  #report_parameters_daterange {
    visibility: visible;
    display: inline;
  }
  #report_results table {
    margin-top: 0px;
  }
}

/* specifically exclude some from the screen */
@media screen {
  #report_parameters_daterange {
    visibility: hidden;
    display: none;
  }
}
    </style>
  </head>
  <body class="body_top">
    <!-- Required for the popup date selectors -->
    <div id="overDiv" style="position: absolute; visibility: hidden; z-index: 1000;"></div>

    <span class='title'><?php echo xlt('Report').' '.$page_titles[$rule_filter].$page_subtitle; ?></span>

    <form method='post' name='theform' id='theform' action='clinical_measures.php?type=<?php echo attr($type_report) ;?>' onsubmit='return validateForm()'>
      <div id="report_parameters">
        <table>
          <tr>
            <td scope="row" width='<?php echo $widthDyn; ?>'>
              <div style='float:left'>
                <table class='text'>
<?php if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016', 'amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
                  <tr>
                    <td class='label'>
                      <?php echo htmlspecialchars(xl('Begin Date'), ENT_NOQUOTES); ?>:
                    </td>
                    <td>
                      <input <?php echo $dis_text; ?> type='text' name='form_begin_date' id="form_begin_date" size='20'
                        value='<?php echo htmlspecialchars($begin_date, ENT_QUOTES); ?>'
                        onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)'
                        title='<?php echo htmlspecialchars(xl('yyyy-mm-dd hh:mm:ss'), ENT_QUOTES); ?>'>
<?php   if(empty($report_id)) { ?>
                      <img src='../pic/show_calendar.gif' align='absbottom' width='24' height='22'
                        id='img_begin_date' border='0' alt='[?]' style='cursor:pointer'
                        title='<?php echo htmlspecialchars(xl('Click here to choose a date'), ENT_QUOTES); ?>'>
<?php   } ?>
                    </td>
                  </tr>
<?php } ?>
                  <tr>
                    <td class='label'>
<?php if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016', 'amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
                      <?php echo htmlspecialchars(xl('End Date'), ENT_NOQUOTES); ?>:
<?php } else { ?>
                      <?php echo htmlspecialchars(xl('Target Date'), ENT_NOQUOTES); ?>:
<?php } ?>
                    </td>
                    <td>
                      <input <?php echo $dis_text; ?> type='text' name='form_target_date' id="form_target_date" size='20'
                        value='<?php echo htmlspecialchars($target_date, ENT_QUOTES); ?>'
                        onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)'
                        title='<?php echo htmlspecialchars(xl('yyyy-mm-dd hh:mm:ss'), ENT_QUOTES); ?>'>
<?php if(empty($report_id)) { ?>
                      <img src='../pic/show_calendar.gif' align='absbottom' width='24' height='22'
                        id='img_target_date' border='0' alt='[?]' style='cursor:pointer'
                        title='<?php echo htmlspecialchars(xl('Click here to choose a date'), ENT_QUOTES); ?>'>
<?php } ?>
                    </td>
                  </tr>
<?php if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) { ?>
                  <tr>
                    <td class='label'>
                      <?php echo xlt('Measure Set'); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_rule_filter' name='form_rule_filter'>
                        <option value='pqrs_individual_2015' <?php if ($rule_filter == "pqrs_individual_2015") {echo "selected";} ?>><?php echo xlt('All 2015 PQRS Individual Measures'); ?></option>
                        <option value='pqrs_groups_2015' <?php if ($rule_filter == "pqrs_groups_2015") {echo "selected";} ?>><?php echo xlt('All 2015 PQRS Group Measures'); ?></option>
                        <option value='pqrs_individual_2016' <?php if ($rule_filter == "pqrs_individual_2016") {echo "selected";} ?>><?php echo xlt('All 2016 PQRS Individual Measures'); ?></option>
                        <option value='pqrs_groups_2016' <?php if ($rule_filter == "pqrs_groups_2016") {echo "selected";} ?>><?php echo xlt('All 2016 PQRS Group Measures'); ?></option>
                      </select>
                    </td>
                  </tr>
<?php } elseif(in_array($type_report, array('cqm', 'cqm_2011', 'cqm_2014'))) { ?>
                  <tr>
                    <td class='label'>
                      <?php echo xlt('Rule Set'); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_rule_filter' name='form_rule_filter'>
                        <option value='cqm' <?php if($rule_filter == 'cqm') {echo 'selected';} ?>><?php echo xlt('All Clinical Quality Measures (CQM)'); ?></option>
                        <option value='cqm_2011' <?php if($rule_filter == 'cqm_2011') {echo 'selected';} ?>><?php echo xlt('2011 Clinical Quality Measures (CQM)'); ?></option>
                        <option value='cqm_2014' <?php if($rule_filter == 'cqm_2014') {echo 'selected';} ?>><?php echo xlt('2014 Clinical Quality Measures (CQM)'); ?></option>
                      </select>
                    </td>
                  </tr>
<?php } elseif(in_array($type_report, array('amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
                  <tr>
                    <td class='label'>
                      <?php echo xlt('Rule Set'); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_rule_filter' name='form_rule_filter'>
<?php   if($rule_filter == 'amc') { //only show this when displaying old reports. Not available option for new reports ?>
                        <option value='amc' selected><?php echo xlt('All Automated Measure Calculations (AMC)'); ?></option>
<?php   } ?>
                        <option value='amc_2011' <?php if($rule_filter == "amc_2011") echo 'selected'; ?>><?php echo xlt('2011 Automated Measure Calculations (AMC)'); ?></option>
                        <option value='amc_2014_stage1' <?php if($rule_filter == "amc_2014_stage1") echo 'selected'; ?>><?php echo xlt('2014 Automated Measure Calculations (AMC) - Stage I'); ?></option>
                        <option value='amc_2014_stage2' <?php if($rule_filter == "amc_2014_stage2") echo 'selected'; ?>><?php echo xlt('2014 Automated Measure Calculations (AMC) - Stage II'); ?></option>
                      </select>
                    </td>
                  </tr>
<?php } elseif($type_report == 'standard') { ?>
                  <tr>
                    <td class='label'>
                      <?php echo xlt('Rule Set'); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_rule_filter' name='form_rule_filter'>
                        <option value='passive_alert' <?php if($rule_filter == 'passive_alert') {echo 'selected';} ?>><?php echo xlt('Passive Alert Rules'); ?></option>
                        <option value='active_alert' <?php if($rule_filter == 'active_alert') {echo 'selected';} ?>><?php echo xlt('Active Alert Rules'); ?></option>
                        <option value='patient_reminder' <?php if($rule_filter == 'patient_reminder') {echo 'selected';} ?>><?php echo xlt('Patient Reminder Rules'); ?></option>
                      </select>
                    </td>
                  </tr>
<?php
    }

    if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) {
?>
                  <tr>
                    <td class='label'>
                      <?php echo htmlspecialchars(xl('Measure Group Selection'), ENT_NOQUOTES); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_plan_filter' name='form_plan_filter'>
                        <option value=''>-- <?php echo htmlspecialchars(xl('Ignore'), ENT_NOQUOTES); ?> --</option>
                        <option value='pqrs_individual_2015' <?php if($plan_filter == "pqrs_individual_2015") {echo "selected";} ?>><?php echo htmlspecialchars( xl('All 2015 Individual Measures'), ENT_NOQUOTES); ?></option>
                        <option value='pqrs_groups_2015' <?php if($plan_filter == "pqrs_groups_2015") {echo "selected";} ?>><?php echo htmlspecialchars( xl('All 2015 Measure Group Measures'), ENT_NOQUOTES); ?></option>
                        <option value='pqrs_individual_2016' <?php if($plan_filter == "pqrs_individual_2016") {echo "selected";} ?>><?php echo htmlspecialchars( xl('All 2016 Individual Measures'), ENT_NOQUOTES); ?></option>
                        <option value='pqrs_groups_2016' <?php if($plan_filter == "pqrs_groups_2016") {echo "selected";} ?>><?php echo htmlspecialchars( xl('All 2016 Measure Group Measures'), ENT_NOQUOTES); ?></option>
                      </select>
                    </td>
                  </tr>
<?php } elseif(in_array($type_report, array('amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
                  <input type='hidden' id='form_plan_filter' name='form_plan_filter' value=''>
<?php } else { ?>
                  <tr>
                    <td class='label'>
                      <?php echo htmlspecialchars(xl('Plan Set'), ENT_NOQUOTES); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_plan_filter' name='form_plan_filter'>
                        <option value=''>-- <?php echo htmlspecialchars(xl('Ignore'), ENT_NOQUOTES); ?> --</option>
<?php   if(in_array($type_report, array('cqm', 'cqm_2011', 'cqm_2014'))) { ?>
                        <option value='cqm' <?php if($plan_filter == 'cqm') {echo 'selected';} ?>><?php echo htmlspecialchars(xl('All Official Clinical Quality Measures (CQM) Measure Groups'), ENT_NOQUOTES); ?></option>
                        <option value='cqm_2011' <?php if($plan_filter == 'cqm_2011') {echo 'selected';} ?>><?php echo htmlspecialchars(xl('2011 Official Clinical Quality Measures (CQM) Measure Groups'), ENT_NOQUOTES); ?></option>
                        <option value='cqm_2014' <?php if($plan_filter == 'cqm_2014') {echo 'selected';} ?>><?php echo htmlspecialchars(xl('2014 Official Clinical Quality Measures (CQM) Measure Groups'), ENT_NOQUOTES); ?></option>
<?php   } elseif($type_report == 'standard') { ?>
                        <option value='normal' <?php if($plan_filter == 'normal') {echo 'selected';} ?>><?php echo htmlspecialchars(xl('Active Plans'), ENT_NOQUOTES); ?></option>
<?php   } ?>
                      </select>
                    </td>
                  </tr>
<?php } ?>
                  <tr>
                    <td class='label'>
                      <?php echo htmlspecialchars(xl('Provider'), ENT_NOQUOTES); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_provider' name='form_provider'>
                        <option value=''>-- <?php echo htmlspecialchars(xl('All (Cumulative)'), ENT_NOQUOTES); ?> --</option>
<!-- TODO: Not sure what this does yet, but may have use for creating multiple files/provider stuff. -->
                        <option value='collate_outer' <?php if($provider == 'collate_outer') {echo 'selected';} ?>>-- <?php echo htmlspecialchars(xl('All (Collated Format A)'), ENT_NOQUOTES); ?> --</option>
                        <option value='collate_inner' <?php if($provider == 'collate_inner') {echo 'selected';} ?>>-- <?php echo htmlspecialchars(xl('All (Collated Format B)'), ENT_NOQUOTES); ?> --</option>
<?php
      // Build a drop-down list of providers.
      if(!isset($provider_facility_filter)) {
        $provider_facility_filter = '';
      }
      $providers = sqlStatement('SELECT `id`, `lname`, `fname` FROM `users` WHERE `authorized` = 1 '.$provider_facility_filter.' ORDER BY `lname`, `fname`;');
      // (CHEMED) facility filter
      while($providerRow = sqlFetchArray($providers)) {
?>
                        <option value='<?php echo htmlspecialchars($providerRow['id'], ENT_QUOTES); ?>' <?php if($providerRow['id'] == $provider) echo ' selected'; ?>><?php echo htmlspecialchars($providerRow['lname'].', '.$providerRow['fname'], ENT_NOQUOTES); ?></option>
<?php } ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class='label'>
                      <?php echo htmlspecialchars(xl('Provider Relationship'), ENT_NOQUOTES); ?>:
                    </td>
                    <td>
                      <select <?php echo $dis_text; ?> id='form_pat_prov_rel' name='form_pat_prov_rel' title='<?php echo xlt('Only applicable if a provider or collated list was chosen above. PRIMARY only selects patients that the provider is the primary provider. ENCOUNTER selects all patients that the provider has seen.'); ?>'>
                        <option value='primary'<?php if($pat_prov_rel == 'primary') {echo 'selected';} ?>><?php echo xlt('Primary'); ?></option>
                        <option value='encounter'<?php if($pat_prov_rel == 'encounter') {echo 'selected';} ?>><?php echo xlt('Encounter'); ?></option>
                      </select>
                    </td>
                  </tr>
<?php if(in_array($type_report, array('amc', 'amc_2011', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
                  <tr>
                    <td>
                      <?php echo htmlspecialchars(xl('Number labs'), ENT_NOQUOTES); ?>:<br>
                      (<?php echo htmlspecialchars(xl('Non-electronic'), ENT_NOQUOTES); ?>)
                    </td>
                    <td>
                      <input <?php echo $dis_text; ?> type="text" id="labs_manual_entry" name="labs_manual_entry" value="<?php echo htmlspecialchars($labs_manual, ENT_QUOTES); ?>">
                    </td>
                  </tr>
<?php } ?>
                </table>
              </div>
            </td>
            <td align='left' valign='middle' height="100%">
              <table style='border-left:1px solid; width:100%; height:100%' >
                <tr>
                  <td scope="row">
                    <div style='margin-left:15px'>
<?php if(empty($report_id)) { ?>
                      <a id='submit_button' href='#' class='css_button' onclick='runReport();'>
                        <span>
                          <?php echo htmlspecialchars(xl('Submit'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
                      <span id='status_span'></span>
                      <div id='processing' style='margin:10px;display:none;'><img src='../pic/ajax-loader.gif'/></div>
<?php   if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) { ?>
                      <a id='xmla_button' href='#' class='css_button' onclick='return GenXml("PQRS")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate PQRS report (SimpleXML) 2015'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
                      <a id='xmlb_button' href='#' class='css_button' onclick='return GenXml("PQRS-2")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Stub for additional xml format submissions'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
<?php   } elseif($type_report == 'cqm') { ?>
                      <a id='xmla_button' href='#' class='css_button' onclick='return GenXml("false")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate PQRI report (Method A) - 2011'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
                      <a id='xmlb_button' href='#' class='css_button' onclick='return GenXml("true")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate PQRI report (Method E) - 2011'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
<?php
      }
    }

    if(!empty($report_id)) {
?>
                      <a href='#' class='css_button' id='printbutton'>
                        <span>
                          <?php echo htmlspecialchars(xl('Print'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
<?php   if(in_array($type_report, array('pqrs_individual_2015', 'pqrs_individual_2016'))) { ?>
                      <a href="#" id="genPQRS" class='css_button' onclick='return downloadQRDA()'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate PQRS 2015 STUB'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
                      <a href="#" id="xmlc_button" class='css_button' onclick='return GenXml("PQRS-3")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate PQRS 2016 STUB (GenXml reference)'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
<?php   } elseif($type_report == 'cqm_2014') { ?>
                      <a href="#" id="genQRDA" class='css_button' onclick='return downloadQRDA()'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate QRDA I – 2014'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
                      <a href="#" id="xmlc_button" class='css_button' onclick='return GenXml("QRDA")'>
                        <span>
                          <?php echo htmlspecialchars(xl('Generate QRDA III - 2014'), ENT_NOQUOTES); ?>
                        </span>
                      </a>
<?php
      }

      if($back_link == 'list') {
?>
                      <a href='report_results.php' class='css_button' onclick='top.restoreSession()'><span><?php echo xlt('Return To Report Results'); ?></span></a>
<?php   } else { ?>
                      <a href='#' class='css_button' onclick='top.restoreSession(); $("#theform").submit();'><span><?php echo xlt('Start Another Report'); ?></span></a>
<?php
      }
    }
?>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>  <!-- end of search parameters -->
      <br>
<?php if(!empty($report_id)) { ?>
      <div id="report_results">
        <table>
          <thead>
            <th><?php echo htmlspecialchars(xl('Title'), ENT_NOQUOTES); ?></th>
            <th><?php echo htmlspecialchars(xl('Total Patients'), ENT_NOQUOTES); ?></th>
            <th><?php if(in_array($type_report, array('amc', 'pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016'))) { echo htmlspecialchars(xl('Denominator'), ENT_NOQUOTES); } else { echo htmlspecialchars(xl('Applicable Patients').' ('.xl('Denominator').')', ENT_NOQUOTES); } ?></th>
<?php   if($type_report != 'amc') { ?>
            <th><?php echo htmlspecialchars(xl('Excluded Patients'), ENT_NOQUOTES); ?></th>
<?php   } ?>
            <th><?php if($type_report == 'amc') { echo htmlspecialchars(xl('Numerator'), ENT_NOQUOTES); } else { echo htmlspecialchars(xl('Passed Patients').' ('.xl('Numerator').')', ENT_NOQUOTES); } ?></th>
            <th><?php if($type_report == 'amc') { echo htmlspecialchars(xl('Failed'), ENT_NOQUOTES); } else { echo htmlspecialchars(xl('Failed Patients'), ENT_NOQUOTES); } ?></th>
            <th><?php echo htmlspecialchars(xl('Performance Percentage'), ENT_NOQUOTES); ?></th>
          </thead>
          <tbody>  <!-- added for better print-ability -->
<?php

      $firstProviderFlag = true;
      $firstPlanFlag = true;
      $existProvider = false;
error_log("Datasheet is [".$dataSheet."]",0);
error_log("Datasheet print_r is ".print_r($dataSheet,TRUE),0);
      foreach($dataSheet as $row) {
?>
            <tr bgcolor='<?php echo $bgcolor ?>'>
<?php
        if(isset($row['is_main']) || isset($row['is_sub'])) {
?>
              <td class='detail'>
<?php
          if(isset($row['is_main'])) {
// TODO: Art note: No idea what I am doing here yet... the below is very ambiguous
            // is_sub is a special case of is_main whereas total patients, denominator, and excluded patients are taken
            // from is_main prior to it. So, need to store denominator patients from is_main for subsequent is_sub
            // to calculate the number of patients that failed.
            // Note that exlusion in the standard rules is not the same as in the cqm/amd and should not be in calculation
            // as is in the cqm/amc rules.
            $main_pass_filter = $row['pass_filter'];

            echo '<b>'.generate_display_field(array('data_type' => '1', 'list_id' => 'clinical_rules'), $row['id']).'</b>';

            $tempMeasuresString = '';

            switch($type_report) {
	            case 'pqrs':
              case 'pqrs_individual_2015':
              case 'pqrs_groups_2015':
              case 'pqrs_individual_2016':
              case 'pqrs_groups_2016':
                if(!empty($row['pqrs_code'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('PQRS').':'.$row['pqrs_code'], ENT_NOQUOTES).' ';
                }
                break;

              case 'cqm':
              case 'cqm_2011':
              case 'cqm_2014':
                if(!empty($row['cqm_pqri_code'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('PQRI').':'.$row['cqm_pqri_code'], ENT_NOQUOTES).' ';
                }
                if(!empty($row['cqm_nqf_code'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('NQF').':'.$row['cqm_nqf_code'], ENT_NOQUOTES).' ';
                }
                break;

              case 'amc':
                if(!empty($row['amc_code'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('AMC-2011').':'.$row['amc_code'], ENT_NOQUOTES).' ';
                }
                if(!empty($row['amc_code_2014'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('AMC-2014').':'.$row['amc_code_2014'], ENT_NOQUOTES).' ';
                }
                break;

              case 'amc_2011':
                if(!empty($row['amc_code'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('AMC-2011').':'.$row['amc_code'], ENT_NOQUOTES).' ';
                }
                break;

              case 'amc_2014_stage1':
              case 'amc_2014_stage2':
                if(!empty($row['amc_code_2014'])) {
                  $tempMeasuresString .= ' '.htmlspecialchars(xl('AMC-2014').':'.$row['amc_code_2014'], ENT_NOQUOTES).' ';
                }
                break;
            }

            if(!empty($tempMeasuresString)) {
              echo '('.$tempMeasuresString.')';
            }

            if(!(empty($row['concatenated_label']))) {
              echo ', '.htmlspecialchars(xl($row['concatenated_label']), ENT_NOQUOTES).' ';
            }
          } else {
            echo generate_display_field(array('data_type' => '1', 'list_id' => 'rule_action_category'), $row['action_category']);
            echo ': '.generate_display_field(array('data_type' => '1', 'list_id' => 'rule_action'), $row['action_item']);
          }
?>
              </td>
              <td align='center'><?php echo $row['total_patients']; ?></td>
<?php
          if(isset($row['itemized_test_id']) && $row['pass_filter'] > 0) {
            $query = http_build_query(array(
              'from_page' => 'pqrs_report',
              'pass_id' => 'all',
              'report_id' => attr($report_id),
              'itemized_test_id' => attr($row['itemized_test_id']),
              'numerator_label' => attr($row['numerator_label'])
            ));
?>
              <td align='center'><a href='../main/finder/patient_select.php?<?php echo $query; ?>' onclick='top.restoreSession()'><?php echo $row['pass_filter']; ?></a></td>
<?php
          } else {
?>
              <td align='center'><?php echo $row['pass_filter']; ?></td>
<?php
          }

          if($type_report != 'amc') {
            // Note that amc will likely support in excluded items in the future for MU2
            if($type_report != 'standard' && isset($row['itemized_test_id']) && $row['excluded'] > 0) {
              // Note standard reporting exluded is different than cqm/amc and will not support itemization
              $query = http_build_query(array(
                'from_page' => 'pqrs_report',
                'pass_id' => 'exclude',
                'report_id' => attr($report_id),
                'itemized_test_id' => attr($row['itemized_test_id']),
                'numerator_label' => attr($row['numerator_label']),
              ));
?>
              <td align='center'><a href='../main/finder/patient_select.php?<?php echo $query; ?>' onclick='top.restoreSession()'><?php echo $row['excluded']; ?></a></td>
<?php
            } else {
?>
              <td align='center'><?php echo $row['excluded']; ?></td>
<?php
            }
          }

// TODO: Art note: Targets are not implemented in PQRS reports as far as I understand.  May be useful, but direct entry form will do this instead
          if(isset($row['itemized_test_id']) && $row['pass_target'] > 0) {
            $query = http_build_query(array(
              'from_page' => 'pqrs_report',
              'pass_id' => 'pass',
              'report_id' => attr($report_id),
              'itemized_test_id' => attr($row['itemized_test_id']),
              'numerator_label' => attr($row['numerator_label']),
            ));
?>
              <td align='center'><a href='../main/finder/patient_select.php?<?php echo $query; ?>' onclick='top.restoreSession()'><?php echo $row['pass_target']; ?></a></td>
<?php
          } else {
?>
              <td align='center'><?php echo $row['pass_target']; ?></td>
<?php
          }

          $failed_items = 0;

          if(isset($row['is_main'])) {
            if($type_report == 'standard') {
              // Excluded is not part of denominator in standard rules so do not use in calculation
              $failed_items = $row['pass_filter'] - $row['pass_target'];
            } else {
// TODO: This is assuming excluded is needed in pqrs
              $failed_items = $row['pass_filter'] - $row['pass_target'] - $row['excluded'];
            }
          } else {
            // Excluded is not part of denominator in standard rules so do not use in calculation
            $failed_items = $main_pass_filter - $row['pass_target'];
          }

          if(isset($row['itemized_test_id']) && ($failed_items > 0) ) {
            $query = http_build_query(array(
              'from_page' => 'pqrs_report',
              'pass_id' => 'fail',
              'report_id' => attr($report_id),
              'itemized_test_id' => attr($row['itemized_test_id']),
              'numerator_label' => attr($row['numerator_label']),
            ));
?>
              <td align='center'><a href='../main/finder/patient_select.php?<?php echo $query; ?>' onclick='top.restoreSession()'><?php echo $failed_items; ?></a></td>
<?php
          } else {
?>
              <td align='center'><?php echo $failed_items; ?></td>
<?php
          }

?>
              <td align='center'><?php echo $row['percentage']; ?></td>
<?php
        } elseif(isset($row['is_provider'])) {
          // Display the provider information
          if(!$firstProviderFlag && $provider == 'collate_outer') {
?>
            <tr><td>&nbsp;</td></tr>
<?php
          }

          $contents = htmlspecialchars(xl('Provider').': '.$row['prov_lname'].','.$row['prov_fname'], ENT_NOQUOTES);

          if(!empty($row['npi']) || !empty($row['federaltaxid'])) {
            $contents .= ' (';
            if(!empty($row['npi'])) {
              $contents .= ' '.htmlspecialchars(xl('NPI').':'.$row['npi'], ENT_NOQUOTES).' ';
            }
            if(!empty($row['federaltaxid'])) {
              $contents .= ' '.htmlspecialchars(xl('TID').':'.$row['federaltaxid'], ENT_NOQUOTES).' ';
            }
            $contents .= ')';
          }
?>
              <td class='detail' align='center'><b><?php echo $contents; ?></b></td>
<?php
          $firstProviderFlag = false;
          $existProvider = true;
        } else {
          if(!$firstPlanFlag && $provider != 'collate_outer') {
?>
            <tr><td>&nbsp;</td></tr>
<?php
          }

          $contents = htmlspecialchars(xl('Plan'), ENT_NOQUOTES).': '.generate_display_field(array('data_type' => '1', 'list_id' => 'clinical_plans'), $row['id']);

          if(!empty($row['cqm_measure_group'])) {
            $contents .= ' ('. htmlspecialchars(xl('Measure Group Code').': '.$row['cqm_measure_group'], ENT_NOQUOTES).')';
          }
?>
              <td class='detail' align='center'><b><?php echo $contents; ?></b></td>
<?php
          $firstPlanFlag = false;
        }
?>
            </tr>
<?php   } ?>
          </tbody>
        </table>
      </div>  <!-- end of search results -->
<?php } else { ?>
      <div id="instructions_text" class='text'><?php echo htmlspecialchars(xl('Please input search criteria above, and click Submit to start report.'), ENT_NOQUOTES); ?></div>
<?php } ?>
      <input type='hidden' name='form_new_report_id' id='form_new_report_id' value=''/>
    </form>
  </body>
  <!-- stuff for the popup calendar -->
  <style type="text/css">@import url(../../library/dynarch_calendar.css);</style>
  <script type="text/javascript" src="../../library/dynarch_calendar.js"></script>
<?php   include_once $GLOBALS['srcdir'].'/dynarch_calendar_en.inc.php'; ?>
  <script type="text/javascript" src="../../library/dynarch_calendar_setup.js"></script>
  <script language="Javascript">
<?php if(in_array($type_report, array('pqrs', 'pqrs_individual_2015', 'pqrs_groups_2015', 'pqrs_individual_2016', 'pqrs_groups_2016', 'amc', 'amc_2014_stage1', 'amc_2014_stage2'))) { ?>
    Calendar.setup({inputField:"form_begin_date", ifFormat:"%Y-%m-%d %H:%M:%S", button:"img_begin_date", showsTime:'true'});
<?php } ?>
    Calendar.setup({inputField:"form_target_date", ifFormat:"%Y-%m-%d %H:%M:%S", button:"img_target_date", showsTime:'true'});
  </script>
</html>
