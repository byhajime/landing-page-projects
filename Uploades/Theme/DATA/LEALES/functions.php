<?php
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
 'http://hoto-cocoa.com/LearningPage/wp-content/themes/LEALES/theme-update.json',
 __FILE__,
 'LEALES' //テーマ名
);

?>