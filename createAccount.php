<?php 
    $connString = "mysql:host=localhost;dbname=soccer_site";
    $user = "cs310";
    $pass = "cs310";

        $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">
    <form name="form" action="" method="POST">

        <div id="login_fields">
            <img id="logo" src='images/b_logo.png' alt="Barclay's Logo" title="Barclay's Logo" />
            <h1>Barclay's Fantasy League</h1>
            <h2>MyBFL Create Account</h2>
            <div>
                <input type="text" name="email" id="email" placeholder="Email Address"/><br/>
                <input type="password" name="password" id="password" placeholder="Password"/><br/>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"/>
                <div id="confirm_button">
                    <!-- <a href="index.php?username=test"> -->
                    <input type="submit" name="confirmbutton" id="confirmbutton"  value="Create Account"/>

                    <!-- </a> -->
                </div>


                <?php


                    function checkInputs() {
                        checkEmail();
                        checkPassword();
                    }

                    function checkEmail() {
                        $email = $_POST['email'];
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<script>alert('Not a valid email!');</script>";
                        }
                    }



                    function checkPassword() {
                        if(isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['email'])) {
                            $password = $_POST['password'];
                            $cp = $_POST['confirm_password'];
                            if ($password != $cp) {
                                echo "<script>alert('Passwords don\'t match!');</script>";
                            }
                            else {
                                createAccount();
                                header("LOCATION: index.php");
                            }
                        }
                        }
                    
                    function createAccount() {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $statement = $GLOBALS['pdo']->prepare("INSERT INTO users (username, password) VALUES ('$email', '$password')");
                        $statement->execute();
                        echo "<h1>Account Created!</h1>";
                    }



                    if(isset($_POST['confirmbutton'])){
                        checkInputs();
                    }

                ?>


            </div>
        </div>
        <div>
            <p id="copyright">Copyright &copy; DTM Sports</p>
        </div>
    </form>
</body>


