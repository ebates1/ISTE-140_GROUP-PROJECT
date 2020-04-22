<?php
  
  /**
   * Function validating if value pass custom validation standards
   * @parameters $value, $validation, $errorMessage, and string of &$errors
   * if validation is false insert the $errorMessage to $errors array
   */

  function checkIfValid($value, $validation, $errorMessage, &$errors) {
    if(!filter_var($value, $validation)) {
      array_push($errors, $errorMessage);
    }
  }

  /**
   * Function validating if value pass custom validation standards
   * @parameters $value, $regexCompareTo $errorMessage, and string of &$errors
   * if validation is false insert the $errorMessage to $errors array
   */

  function checkIfRegexValid($value, $regexCompareTo, $errorMessage, &$errors){
    if(!filter_var($value, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>$regexCompareTo)))) {
      array_push($errors, $errorMessage);
    }
  }

?>

