<?php
    // Prevent running directly:
    if (!defined('PERCH_DB_PREFIX')) exit;
    
    $db = $API->get('DB');

    $sql = "ALTER TABLE `".PERCH_DB_PREFIX."pages` ADD COLUMN `pagePlaceholder` tinyint(1) unsigned NOT NULL DEFAULT '0' AFTER `pageDepth`";
    $db->execute($sql);

    $message = $HTML->warning_message('Install complete. Please delete the file: <code>%s</code>', $API->app_path().'/update.php');  

?>