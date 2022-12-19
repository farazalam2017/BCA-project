<?php include_once 'server/urlPatch.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title><?php echo ucwords($_SESSION['Name']); ?> - Student Dashboard </title>
</head>
<body>
    <h2>Welcome <?php echo ucwords($_SESSION['Name']); ?> -  To Your Online Exams Portal</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="">
            <a href="giveExam.php"> <span></span> Start Exams <span></span> <span></span> <span></span>  </a>
            <a href="profile.php"> <span></span> Your Details <span></span> <span></span> <span></span>  </a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello Student!</h1>
                    <p>Student Options like Start Exam, Exam Result, Details of Student.</p>
                    <p><a href="server/logout.php">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php     
    if(isset($errorMessage)){
        echo '<div class="alert success">
               <span class="closebtn">&times;</span>  
               <strong>ALERT !</strong> '.$errorMessage.'
             </div>';
    }
    include_once 'common/footer.php';
    include_once 'common/alert.php';
    ?>
</body>
</html>