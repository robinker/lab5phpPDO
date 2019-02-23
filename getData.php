<?php
    include('config.php');
    header('Content-Type: application/json');

    // for advance search
    $Aquery = $qName = $qHeight = $qMass = $qHair = $qSkin = $qEye = $qGender = '';
    $check = FALSE;

    $sql = "SELECT * FROM character_info WHERE 1 ";
    if(isset($_POST['name']) && !isset($_POST['type'])){
        $sql .= " AND name LIKE '%" . $_POST['name'] . "%'
        OR hair_color LIKE '%" . $_POST['name'] . "%'
        OR skin_color LIKE '%" . $_POST['name'] . "%'
        OR eye_color LIKE '%" . $_POST['name'] . "%'
        OR birth_year LIKE '%" . $_POST['name'] . "%'
        OR gender LIKE '%" . $_POST['name'] . "%'";
    }else if(isset($_POST['type'])){
        // if(empty($_POST["name"])) {
        //     $check = TRUE; // name is empty
        // } else {
        //     $qName =  'name' . ' LIKE ' . "'" . '%' . $_POST["name"] . '%' . "'";
        // }
        
        // if(empty($_POST["hair"])) {
        //     $check = TRUE;
        // } else {
        //     if(!$check){
        //         $qHair .= ' AND ';
        //     }
        //     $qHair .= 'hair' . ' LIKE ' . "'" . '%' . $_POST["hair"] . '%' . "'";
        // }

        // if(empty($_POST["skin"])) {
        //     $check = TRUE;
        // } else {
        //     if(!$check){
        //         $qSkin .= ' AND ';
        //     }
        //     $qSkin .= 'skin' .' LIKE ' . "'" . '%' . $_POST["skin"] . '%' . "'";
        // }

        // if(empty($_POST["eye"])) {
        //     $check = TRUE;
        // } else {
        //     if(!$check){
        //         $qEye .= ' AND ';
        //     }
        //     $qEye .= 'eye' .' LIKE ' . "'" . '%' . $_POST["eye"] . '%' . "'";
        // }

        // if(!$check){
        //     $qHeight .= ' AND ';
        // }
        // if($_POST['height'] == 99) {
        //     $qHeight .=  "'" . $_POST['height']. "'" . '< 100';
        // }elseif($_POST['height'] == 199){
        //     $qHeight .= '99 < ' . "'" .$_POST['height'] . "'" . ' AND'. "'" .$_POST['height'] . "'" . ' < 200';
        // }else{
        //     $qHeight .= "'" . $_POST['height'] . "'" . '> 200';
        // }

        // if(!$check){
        //     $qMass .= ' AND ';
        // }
        // if($_POST['mass'] == 99) {
        //     $qMass .= "'" . $_POST['mass'] . "'" . '< 100';
        // }else{
        //     $qMass .= "'" . $_POST['mass'] . "'" . '> 100';
        // }

        // if(!$check){
        //     $qGender .= ' AND ';
        // }
        if($_POST['gender'] == 'male'){
            $qGender .= ' AND male=' . "'" . $_POST['gender'] . "'"; 
        }elseif($_POST['gender'] == 'female'){
            $qGender .= ' AND female=' . "'" . $_POST['gender'] . "'"; 
        }
        $sql .= $qName . $qHeight . $qMass . $qHair . $qSkin . $qEye . $qGender;
        // $sql .= "gender LIKE". " 'male'";
    }
    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        if($row['height'] == -1){
            $row['height'] = 'unknown';
        }
        if($row['mass'] == -1){
            $row['mass'] = 'unknown';
        }
        array_push($data,$row);
    }

    mysqli_close($conn);
    echo json_encode($data);
?>