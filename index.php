<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $con = mysqli_connect($servername,$username,$password);

    $emailAlreadyRegrusted = false;
    $phoneNoAlreadyRegrusted = false;
    $formSubmmited = false;
    $AccountFound = true;
    $loggedin = false;
    $name;

    echo $_SESSION['name'];
    session_start();
    if(isset($_SESSION["name"])) {

        $loggedin = true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_POST['username']) {
            $username = $_POST["fullname"];
            $email = $_POST["email"];
            $phoneNo = $_POST["phoneno"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];

            $checking = "SELECT * FROM  `Karmsthali`.`users`";
            $checkingResult = mysqli_query($con,$checking);

            while($row = mysqli_fetch_assoc($checkingResult)){
                if ($email == $row['email']) {
                    $emailAlreadyRegrusted = true;
                    break;
                }
                elseif ($phoneNo == $row["phone_no"]) {
                    $phoneNoAlreadyRegrusted = true;
                    break;
                }
            }

            if ($password == $cpassword && $emailAlreadyRegrusted == false && $phoneNoAlreadyRegrusted == false ) {
                $insert = "INSERT INTO `Karmsthali`.`users` (`id`,`name`,`email`,`phone_no`,`password`) VALUES (NULL,'$username','$email','$phoneNo','$password')";
                $result = mysqli_query($con,$insert);

                $formSubmmited = true;
            }
        }
        else{
            $email = $_POST['email'];
            $password = $_POST['password'];

            $CheackingEmail = "SELECT * FROM `Karmsthali`.`users`";
            $CheckingEmailResult = mysqli_query($con,$CheackingEmail);

            while ($row = mysqli_fetch_assoc($CheckingEmailResult)) {
                if ($email == $row['email']) {
                    
                    if($password == $row['password']){
                        
                        session_start();
                        $_SESSION["name"] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        $name = $_SESSION["name"];
                        $AccountFound = true;
                        break;
                    }
                }
                else {
                    $AccountFound = false;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karmsthali</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Login Form
        This is an login form that appers when user clicks on login button
    -->
    <div class="loginform">
        <h2>Login</h2>
        <form action="index.php" method = "post">
            <label for="email">Email/Phone No.</label>
            <input type="text" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" id="submit" value="Log in">
        </form>
        <button id="cancle">Cancle</button>
    </div>

    <!-- Sign Up form 
         This is an sign up form that appers when user click on sign up button
    -->
    <?php
        if($emailAlreadyRegrusted == true){
            echo "<div id='alert'>
            <p><span>Error! </span> This email is alredy regrusted !</p>
            <span id='alertCancleBtn'>&times;</span>
        </div>";
        }  
        elseif ($phoneNoAlreadyRegrusted == true) {
            echo "<div id='alert'>
            <p><span>Error! </span> This phone Number is alredy regrusted !</p>
            <span id='alertCancleBtn'>&times;</span>
        </div>";
        }
        elseif ($formSubmmited == true) {
            echo "<div id='alert' style = 'background : green';>
            <p><span>Success ! </span>Your Form is successfully submmited !</p>
            <span id='alertCancleBtn'>&times;</span>
        </div>";
        }
        // elseif ($AccountFound == true) {
        //     echo "<div id='alert' style = 'background : green';>
        //     <p><span>Success ! </span>Login Success !</p>
        //     <span id='alertCancleBtn'>&times;</span>
        // </div>";
        // }
    ?>

    <div class="signupform">
        <form action="index.php" method="post">
            <label for="FullName">Full Name</label>
            <input type="text" id="FullName" name="fullname" required>
            <label for="email">Email</label>
            <input type="email" id="userEmail" name="email" required>
            <label for="phoneno">Phone Number</label>
            <input type="text" id="phoneno" name="phoneno" required>
            <label for="password">Password</label>
            <input type="text" id="UserPassword" name="password" required>
            <label for="cpassword">Conform Password</label>
            <input type="text" id="cpassword" name="cpassword" required>
            <input type="submit" id="submitBtn">
            <input type="reset" id="resetBtn">
        </form>
        <button id="canclesignUpBtn">Cancle</button>
    </div>

    <div class="container">
        <header>
            <h2>Karmsthali</h2>
        <?php
          if(($AccountFound == false) or ($loggedin == false)){
            echo "
            <div>
            <button id='login'>
                    Login
                </button>
                <button id='signup'>
                    Sign Up
                </button>
                </div>";
          }  
          else{
              echo "<h2 id = 'username'>";
              echo "$name";
              echo "</h2>";
          }
        ?>
            
        </header>
        <h1 id = "heading">Karmsthali Institute</h1>
        <p id = "slogan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda amet. </p>
    </div>

    <div id = "teachers">
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
        <div class="teacher">
            <img src="linustorvalds.jpg" alt="">
            <div class="data">
                <h3>Name</h3>
                <p>This is the speciality of this member. and thiskdkfjk kjsdhf j kj dsiuyf jdk45</p>
            </div>
        </div>
    </div>


</body>


</html>
<script src="index.js"></script>