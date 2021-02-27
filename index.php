<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $con = mysqli_connect($servername,$username,$password);

    $emailAlreadyRegrusted = false;
    $phoneNoAlreadyRegrusted = false;
    $formSubmmited = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['fullname'])) {
            $username = $_POST["fullname"];
            $email = $_POST["email"];
            $phoneNo = $_POST["phoneno"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];

            $checking = "SELECT * FROM  `karmsthali`.`users`";
            $checkingResult = mysqli_query($con,$checking);

            while($row = mysqli_fetch_assoc($checkingResult)){
                echo "checking username in data base";
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

            $CheackingEmail = "SELECT * FROM `karmsthali`.`users` WHERE email = '$email'";
            $CheckingEmailResult = mysqli_query($con,$CheackingEmail);

            while ($row = mysqli_fetch_assoc($CheckingEmailResult)) {
                if ($password == $row['password']) {
                    $login = true;
                    $name = $row['name'];
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    header("location: index.php");
                }
                else {
                    $showError = "Username or Passwrod is Wrong";
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
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <!-- Login Form
        This is an login form that appers when user clicks on login button
    -->
    <div class="loginform">
        <h2>Login</h2>
        <form action="index.php" method="post">
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
        <header id="header">
            <h2>Karmsthali</h2>
            <?php
        if(session_id() == ''){
            session_start();
        }
        if ((isset($_SESSION['loggedin']))) {
            echo "<h2 id = 'username'>".$_SESSION['name']."</h2>";
        }
        else {
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
        ?>

        </header>
        <h1 id="heading">Karmsthali Institute</h1>
        <p id="slogan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda amet. </p>
    </div>
    <div id="Toppers">
        <div id="ThisYeartoppers">
            <h2>Our Top 5 Students of 2021</h2>
            <div id="ToppersImage">
                <div id="topper">
                    <img src="Toppers/linustorvalds.jpg" alt="">
                </div>
                <div id="otherTopper">
                    <div class="anotherTopper">
                        <img src="Toppers/Steave-Jobs.jpg" alt="Topper">
                    </div>
                    <div class="anotherTopper">
                        <img src="Toppers/Mark_Zukerberg.jpg" alt="Topper">
                    </div>
                    <div class="anotherTopper">
                        <img src="Toppers/bill-gates.jpg" alt="Topper">
                    </div>
                    <div class="anotherTopper">
                        <img src="Toppers/mrrobot.jpg" alt="Topper">
                    </div>
                </div>
            </div>
        </div>
        <div id="previousYearToppers">
            <div class="TopperBox TopperBox1">2020</div>
            <div class="TopperBox TopperBox2">2019</div>
            <div class="TopperBox TopperBox3">2018</div>
            <div class="TopperBox TopperBox4">2017</div>
        </div>
    </div>
    <div id="reviewOfOurStudents">
        <h2>Student Review</h2>
        <div class="students student1">
            <img src="Teacher-Images/linustorvalds.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque quisquam delectus totam architecto
                facilis sunt praesentium, consequatur modi libero! Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
            </p>
        </div>
        <div class="students student2">
            <img src="Teacher-Images/linustorvalds.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque quisquam delectus totam architecto
                facilis sunt praesentium, consequatur modi libero! Lorem ipsum dolor sit amet consectetur adipisicing
                elit. consectetur adipisicing elit. Ut, quasi?
            </p>
        </div>
        <div class="students student3">
            <img src="Teacher-Images/linustorvalds.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque quisquam delectus totam architecto
                facilis sunt praesentium, consicing elit. Ut, quasi? Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Voluptate, odit!
            </p>
        </div>
    </div>
    <div id="teachers">
        <?php
            $GetTeachers = "SELECT * FROM `karmsthali`.`teachersdata`";
            $GettingTeachers = mysqli_query($con,$GetTeachers);
            while ($row = mysqli_fetch_assoc($GettingTeachers)) {
                echo "<div class='teacher'>
                <img src='Teacher-Images/linustorvalds.jpg' alt=''>
                <div class='data'>
                    <h3>".$row['name']."</h3>
                    <p>".$row['quality']."</p>
                </div>
            </div>";
            }
        ?>
    </div>
    <div id="contactUs">
        <div id="offlineContact">
            <h2 id="contactHeading">Contact Us</h2>
            <ul class="info">
                <li>
                    <span><img src="images/map.png" alt=""></span>
                    <span>Near Kachari Road<br>
                        Vijay Bhawan Ke Samne<br>
                        Alwar,Rajasthan,India
                    </span>
                </li>
                <li>
                    <span><img src="images/Phone.svg" alt=""></span>
                    <p><a href="tel:9667149543">+91 9667149543</a></p>
                </li>
                <li>
                    <span><img src="images/Gmail.svg" alt=""></span>
                    <span>
                        <p><a href="mailto:yjangid584@gmail.com">Yjangid584@gmail.com</a></p>
                    </span>
                </li>
            </ul>
        </div>
        <form action="">
            <div>
                <input type="test" id="firstName" placeholder="First Name" required>
                <input type="text" id="lastName" placeholder="Last Name" required>
            </div>
            <input type="text" id="PhoneNumber" placeholder="Phone Number" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" id="submit">
        </form>
    </div>
    <?php
        require "_footer.php";
    ?>
</body>


</html>
<script src="index.js"></script>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".students"), {
        max: 25,
        speed: 400
    });
</script>