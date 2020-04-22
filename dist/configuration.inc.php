<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $dir = __DIR__;

  //Path variables
  $userAbsolutePath = "/~user/240/project-group-final/";
  $docSectionPath = "{$dir}/documentSection/";
  $libraryPath = "{$dir}/library/";

  //Files variables
  $meta = "{$docSectionPath}html-meta.inc.php";
  $navigation = "{$docSectionPath}navigation.inc.php";
  $footer = "{$docSectionPath}footer.inc.php";

  $bootstrapCss = "{$libraryPath}bootstrap-css.inc.php";
  $bootstrapScripts = "{$libraryPath}bootstrap-scripts.inc.php";
  $googleApisCss = "{$libraryPath}googleapis-css.inc.php";
  $fontAwesomeScript = "{$libraryPath}fontAwesome-scripts.inc.php";

?>