<?php
    session_start();
    $nameErr = $heightErr = $massErr = $hairErr = $skinErr = $eyeErr = NULL;
    $heightEmpty = $massEmpty = $eyeEmpty = NULL;
    $name = $height = $gender = $mass = $hair = $skin = $eye = $bd ="";
    $error = FALSE;
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = TRUE;
          $error = TRUE;
        } else {
          $name = $_POST["name"];
        }
        
        if (empty($_POST["last_name"])) {
          $heightErr = TRUE;
          $error = TRUE;
        } else {
          $height = $_POST["last_name"];
        }
          
        $gender = $_POST["gender"];
        
        if (empty($_POST["mass"])) {
          $massErr = TRUE;
          $error = TRUE;
        } else {
          $mass = $_POST["mass"];
        }
      
        if (empty($_POST["hair"])) {
          $hairErr = TRUE;
          $error = TRUE;
        } else {
            $hair = $_POST["hair"];
        }

        if (empty($_POST["skin"]) && $_POST["skin"] !=0) {
          $skinErr = TRUE;
          $error = TRUE;
        } else {
          if($_POST["skin"] >= 0 && $_POST["skin"] !=""){
            $skin = $_POST["skin"];
          } else {
            $skinErr = TRUE;
            $error = TRUE;
          }
          
        }

        if (empty($_POST["eye"]) && $_POST["eye"] != 0) {
          echo $_POST["eye"];
          $eyeErr = TRUE;
          $error = TRUE;
        } else {
          if($_POST["eye"] >= 0 && $_POST["eye"] !=""){
            $eye = $_POST["eye"];
          } else {
            $eyeErr = TRUE;
            $error = TRUE;
          }
          
        }
      
      }

      
      // $_SESSION['error'] = $error;
      // $_SESSION['nameErr'] = $nameErr;
      // $_SESSION['heightErr']= $heightErr;
      // $_SESSION['massErr'] = $massErr;
      // $_SESSION['hairErr'] = $hairErr;
      // $_SESSION['skinErr'] = $skinErr;
      // $_SESSION['eyeErr'] = $eyeErr;
      // $_SESSION['bdErr'] = $bdErr;

      // $_SESSION['heightEmpty'] = $heightEmpty;
      // $_SESSION['massEmpty'] = $massEmpty;
      
      // $_SESSION['name'] = $name;
      // $_SESSION['height'] = $height;
      // $_SESSION['mass'] = $mass;
      // $_SESSION['hair'] = $hair;
      // $_SESSION['skin'] = $skin;
      // $_SESSION['eye'] = $eye;
      // $_SESSION['bd'] = $bd;
      // $_SESSION['gender'] = $gender;
      
      // if($_SESSION['uploadStatus']){
      //   header('Location: index.php');
      //   die();
      // }

      // if(isset($_POST["submit"])){
        
      // }
      
      require('form_view.php');
      // if(!$error){
      //   header('Location: index.php');
      // }
      

?>