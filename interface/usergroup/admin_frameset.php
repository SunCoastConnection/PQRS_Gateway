<?php
// Cloned from usergroup.php for new layout.

include_once("../globals.php");
include_once("../../modules/ACL/acl.inc.php");
?>
<HTML>
<HEAD>
</HEAD>
<frameset rows="<?php echo $GLOBALS['navBarHeight'] ?>,*" frameborder="1"
 border="1" framespacing="1" bordercolor="#000000">
  <frame src="usergroup_navigation.php" name="Navigation" scrolling="no" frameborder="1" noresize>
  <frame
<?php if (acl_check('practice_admin')) { ?>
   src="usergroup_admin.php"
<?php } else if (acl_check('practice_admin')) { ?>
   src="../forms_admin/forms_admin.php"
<?php } else if (acl_check('practice_admin')) { ?>
   src="<?php echo $GLOBALS['webroot'] ?>/controller.php?practice_settings"
<?php } else if (acl_check('practice_admin')) { ?>
   src="../../modules/calendar/admin.php"
<?php } else if ( (!$GLOBALS['disable_phpmyadmin_link']) && (acl_check('super')) ) { ?>
   src="../../phpmyadmin/index.php"
<?php } else { ?>
   src="<?php echo $rootdir ?>/logview/logview.php"
<?php } ?>
   name="Main" scrolling="auto" frameborder="0" noresize>
</frameset>
</HTML>
