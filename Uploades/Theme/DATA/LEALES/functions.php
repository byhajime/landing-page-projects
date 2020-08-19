<?php
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
 'https://raw.githubusercontent.com/byhajime/landing-page-projects/master/Uploades/Theme/theme-update.json',
 __FILE__,
 'LEALES' //テーマ名
);

?>