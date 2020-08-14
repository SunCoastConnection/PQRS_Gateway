<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("$srcdir/registry.inc");
    
$menu_update_map=array();
$menu_update_map["Visit Forms"]="update_visit_forms";

function update_visit_forms(&$menu_list)
{
    $baseURL="/interface/patient_file/encounter/load_form.php?formname=";
    $menu_list->children=array();
$lres = sqlStatement("SELECT * FROM list_options " .
  "WHERE list_id = 'lbfnames' ORDER BY seq, title");
if (sqlNumRows($lres)) {
  while ($lrow = sqlFetchArray($lres)) {
    $option_id = $lrow['option_id']; // should start with LBF
    $title = $lrow['title'];
    $formURL=$baseURL . urlencode($option_id);
    $formEntry=new stdClass();
    $formEntry->label=xl_form_title($title);
    $formEntry->url=$formURL;
    $formEntry->requirement=2;
    $formEntry->target='enc';
    array_push($menu_list->children,$formEntry);
  }
}

    $reg = getRegistered();
    if (!empty($reg)) {
      foreach ($reg as $entry) {
        $option_id = $entry['directory'];
              $title = trim($entry['nickname']);
        if ($option_id == 'fee_sheet' ) continue;
        if ($option_id == 'patient_encounter') continue;
        if (empty($title)) $title = $entry['name'];
        
        $formURL=$baseURL . urlencode($option_id);
        $formEntry=new stdClass();
        $formEntry->label=xl_form_title($title);
        $formEntry->url=$formURL;
        $formEntry->requirement=2;
        $formEntry->target='enc';
        array_push($menu_list->children,$formEntry);
      }
    }    
    
}
function menu_update_entries(&$menu_list)
{
    global $menu_update_map;
    for($idx=0;$idx<count($menu_list);$idx++)
    {

        $entry = $menu_list[$idx];
        if(!isset($entry->url))
        {
            if(isset($menu_update_map[$entry->label]))
            {
                if ( is_array( $menu_update_map[$entry->label] ) ) {
                    foreach ( $menu_update_map[$entry->label] as $callback ) {
                        $callback($entry);
                    }
                } else {
                    $menu_update_map[$entry->label]($entry);
                }
            }                
        }
        // Translate the labels 
        $entry->label=xlt($entry->label);
        // Recursive update of children
        if(isset($entry->children))
        {
            menu_update_entries($entry->children);
        }
    }
}

function menu_apply_restrictions(&$menu_list_src,&$menu_list_updated)
{
    for($idx=0;$idx<count($menu_list_src);$idx++)
    {
        $srcEntry=$menu_list_src[$idx];
        $includeEntry=true;
        
        // If the entry has an ACL Requirement, then test. 
        //This used to take a section/value/user field, now only
        //one value is passed, so menu acl requirements
        //need updating to new stuff.
        //maybe only view_menu values vs. normal access values
        if(isset($srcEntry->acl_req))
        {
            if(!acl_check($srcEntry->acl_req[0]))
            {
                $includeEntry=false;
            }
        }

        // If the entry has a global setting requirement, check 
        if(isset($srcEntry->global_req))
        {
            if(is_array($srcEntry->global_req))
            {
                $noneSet=true;
                for($globalIdx=0;$globalIdx<count($srcEntry->global_req);$globalIdx++)
                {
                    $curSetting=$srcEntry->global_req[$globalIdx];
                    if(isset($GLOBALS[$curSetting]) && $GLOBALS[$curSetting])
                    {
                        $noneSet=false;
                    }
                    
                }
                if($noneSet)
                {
                    $includeEntry=false;
                }
            }
            else
            {
                // ! at the start of the string means test the negation 
                if(substr($srcEntry->global_req,0,1)==='!')
                {
                    $globalSetting=substr($srcEntry->global_req,1);
                    // If the setting is both set and true, then skip this entry
                    if(isset($GLOBALS[$globalSetting]) && $GLOBALS[$globalSetting])
                    {
                        $includeEntry=false;
                    }
                }
                else
                {
                    // If the global isn't set at all, or if it is false then skip the entry
                    if(!isset($GLOBALS[$srcEntry->global_req]) || !$GLOBALS[$srcEntry->global_req])
                    {
                        $includeEntry=false;
                    }
                }
            }
        }
        if(isset($srcEntry->children))
        {
            // Iterate through and check the child elements
            $checked_children=array();
            menu_apply_restrictions($srcEntry->children,$checked_children);
            $srcEntry->children=$checked_children;
        }
        
        if(!isset($srcEntry->url))
        {
            // If this is a header only entry, and there are no child elements, then don't include it in the list.
            if(count($srcEntry->children)===0)
            {
                $includeEntry=false;
            }
        }        
        if($includeEntry)
        {

            array_push($menu_list_updated,$srcEntry);
        }        
    }
}