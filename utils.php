<?php
/*function that enable show of errors*/
function displyDebugInfo() {
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 1);
  error_reporting(-1);
} 