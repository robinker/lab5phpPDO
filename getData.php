<?php
    include('config.php');
    header('Content-Type: application/json');

    // for advance search
    $Aquery = $qName = $qHeight = $qMass = $qHair = $qSkin = $qEye = $qGender = '';
    $check = FALSE;

    $sql = "SELECT * FROM character_info WHERE 1";
    if(isset($_POST['name']) && !isset($_POST['type'])){
        $sql .= " AND name LIKE '%" . $_POST['name'] . "%'
        OR hair_color LIKE '%" . $_POST['name'] . "%'
        OR skin_color LIKE '%" . $_POST['name'] . "%'
        OR eye_color LIKE '%" . $_POST['name'] . "%'
        OR birth_year LIKE '%" . $_POST['name'] . "%'
        OR gender LIKE '%" . $_POST['name'] . "%'";
    }else if(isset($_POST['type'])){
        if(empty($_POST["name"])) {
            
        } else {
            $qName =  " AND name LIKE '%" . $_POST["name"] . "%'";
        }
        
        if(empty($_POST["hair"])) {
            
        } else {
            $qHair .= " AND hair LIKE '%" . $_POST["hair"] . "%'";
        }

        if(empty($_POST["skin"])) {
            
        } else {
            $qSkin .= " AND skin LIKE '%" . $_POST["skin"] . "%'";
        }

        if(empty($_POST["eye"])) {
            
        } else {
            $qEye .= " AND eye LIKE '%" . $_POST["eye"] . "%'";
        }

        if($_POST['height'] == 99) {
            $qHeight .=  " AND height < 100";
        }elseif($_POST['height'] == 199){
            $qHeight .= " AND height > 99 AND height < 200";
        }elseif($_POST['height'] == 200){
            $qHeight .= " AND height > 200";
        }

        if($_POST['mass'] == 99) {
            $qMass .= " AND mass < 100";
        }elseif($_POST['mass'] == 100){
            $qMass .= " AND mass > 100";
        }

        if($_POST['gender'] == 'male'){
            $qGender .= " AND gender='male'"; 
        }elseif($_POST['gender'] == 'female'){
            $qGender .= " AND gender='female'"; 
        }
        $sql .= $qName . $qHeight . $qMass . $qHair . $qSkin . $qEye . $qGender;

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
    // echo $sql . "<br>";
    echo json_encode($data);
?>