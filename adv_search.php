<?php
    $Aquery = $qName = $qHeight = $qMass = $qHair = $qSkin = $qEye = $qGender = '';
    $check = FALSE;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])) {
            $check = TRUE; // name is empty
        } else {
            $qName =  'name' . ' LIKE ' . "'" . '%' . $_POST["name"] . '%' . "'";
        }
        
        if(empty($_POST["hair"])) {
            $check = TRUE;
        } else {
            if(!$check){
                $qHair .= ' AND ';
            }
            $qHair .= 'hair' . ' LIKE ' . "'" . '%' . $_POST["hair"] . '%' . "'";
        }

        if(empty($_POST["skin"])) {
            $check = TRUE;
        } else {
            if(!$check){
                $qSkin .= ' AND ';
            }
            $qSkin .= 'skin' .' LIKE ' . "'" . '%' . $_POST["skin"] . '%' . "'";
        }

        if(empty($_POST["eye"])) {
            $check = TRUE;
        } else {
            if(!$check){
                $qEye .= ' AND ';
            }
            $qEye .= 'eye' .' LIKE ' . "'" . '%' . $_POST["eye"] . '%' . "'";
        }

        if(!$check){
            $qHeight .= ' AND ';
        }
        if($_POST['height'] == 99) {
            $qHeight .=  "'" . 'height' . "'" . '< 100';
        }elseif($_POST['height'] == 199){
            $qHeight .= '99 < ' . "'" . 'height' . "'" . ' &&'. "'". 'height' ."'" . ' < 200';
        }else{
            $qHeight .= "'" . 'height' . "'" . '> 200';
        }

        if(!$check){
            $qMass .= ' AND ';
        }
        if($_POST['mass'] == 99) {
            $qMass .=  "'" . 'mass' . "'" . '< 100';
        }else{
            $qMass .= "'" . 'mass' . "'" . '> 100';
        }

        if(!$check){
            $qGender .= ' AND ';
        }
        if($_POST['gender'] == 'male'){
            $qGender .= "'" . 'gender =' . 'male'; 
        }elseif($_POST['gender'] == 'female'){
            $qGender .= "'" . 'gender =' . 'female'; 
        }
    }
    $Aquery = $qName . $qHeight . $qMass . $qHair . $qSkin . $qEye . $qGender;
    $_SESSION['aQuery'] = $Aquery;
?>