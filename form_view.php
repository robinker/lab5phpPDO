<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="myscript.js"></script>
    
</head>
<body class="has-background-dark">
    <div class="container">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                <h1 class="title">
                    This is KDA calculator
                </h1>
                <h2 class="subtitle">
                    Fill the form with your total score that you play in one game to see how was your average kill per dead!
                </h2>
                </div>
            </div>
        </section>
        <form id="myform" action="form.php" class="form" method="POST" enctype="multipart/form-data">
            <div class="field">
                <div class='container'>
                    <h2>Name</h2>
                </div>
                <label class="warning" id="lbl_name">
                    <?php
                        if(isset($_SESSION['nameErr']) && $_SESSION['nameErr']){
                            echo '* Name Require';
                        }
                    ?>
                
                </label> 
                <div class="control">
                    <input type="text" class="input is-hover" id="name" name="name">
                </div>
            </div>

            <div class="field">
                <div class='container'>
                    <h2>Height</h2>
                </div>
                <label class="warning" id="lbl_height">
                    <?php
                        if(isset($_SESSION['heightErr']) && $_SESSION['heightErr']){
                            echo '* Last Name Require';
                        }
                    ?>
                </label>
                <div class="control">
                    <input type="text" class="input is-hover" id="height" name="height">
                </div>
            </div>

            <div class="field">
                <div class='container'>
                    <h2>Mass</h2>
                </div>
                <label class="warning" id="lbl_mass">
                    <?php
                        if(isset($_SESSION['massErr']) && $_SESSION['massErr']){
                            echo '* Mass Require';
                        }
                    ?>
                
                </label> 
                <div class="control">
                    <input type="text" class="input is-hover" id="mass" name="mass">
                </div>
            </div>
                
            <div class="field">
                <div class='container'>
                        <h2>Hair Color</h2>
                </div>
                <label class="warning" id="lbl_hair">
                    <?php
                        if(isset($_SESSION['hairErr'])){
                            if($_SESSION['hairErr']){
                                echo '* Hair Color Require';
                            }
                        }
                    ?>
                </label> 
                <div class="control">
                    <input type="number" class="input is-hover" id="hair" name="hair">
                </div>
            </div>

            <div class="field">
                <div class='container'>
                    <h2>Skin Color</h2>
                </div>
                <label class="warning" id="lbl_skin">
                    <?php
                        if(isset($_SESSION['skinErr'])){
                            if($_SESSION['skinErr']){
                                echo '* Skin Color Require';
                            }
                        }
                    ?>
                
                </label> 
                <div class="control">
                    <input type="number" class="input is-hover" id="skin" name="skin">
                </div>
            </div>

            <div class="field">
                <div class='container'>
                    <h2>Eye Color</h2>
                </div>
                    <label class="warning" id="lbl_eye">
                        <?php
                            if(isset($_SESSION['eyeErr'])){
                                if($_SESSION['eyeErr']){
                                    echo '* Eye Color Require';
                                }
                            }
                        ?>
                    
                    </label> 
                    <div class="control">
                        <input type="number" class="input is-hover" id="eye" name="eye">
                    </div>
            </div>
            
            <div class="field">
                <div class='container'>
                    <h2>Birth Year</h2>
                </div>
                <label class="warning" id="lbl_bd">
                    </label> 
                    <div class="control">
                        <input type="number" class="input is-hover" id="bd" name="bd">
                    </div>
                </div>
                
            <div class="field">
                <h2>Gender :
                    <span class="gender-selection">
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other
                    </span>
                </h2>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <button class="button is-primary" id="submit-btn" name="submit">Submit</button>
                </p>
                <p class="control">
                    <a href='index.php' class="button is-link" id="back-btn" name="back">Back</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>