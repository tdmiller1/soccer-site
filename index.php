<?php 
$connString = "mysql:host=localhost;dbname=soccer_site";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $statement = $pdo->prepare('SELECT * FROM users');
// $statement->execute();

// $count = $statement->rowCount();


// if($count > 0){
//     $R = $statement->fetchAll(PDO::FETCH_ASSOC);
// }



if(isset($_GET['email'])){
    $username = $_GET['email'];
    // echo $_GET['password'];

    $passwordStatement = $pdo->prepare("SELECT `Password` FROM `users` WHERE Username = '$username'");
    $passwordStatement->execute();
    // $count = $passwordStatement->rowCount();
    // if($count > 0){
    //     $R = $passwordStatement->fetchAll(PDO::FETCH_ASSOC);
    // }

    if ($passwordStatement->rowCount()){
        $R = $passwordStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    if(empty($R)){

    }
    else if($_GET['password'] ==  $R[0]["Password"]){
        header("LOCATION: dashboard.php?username=$username");
    }


}


?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
    <body id="body">
        <form name="form" action="" method="get">

            <div id="login_fields">
                <img id="logo" src='images/b_logo.png' alt="Barclay's Logo" title="Barclay's Logo" />
                <h1>Barclay's Fantasy League</h1>
                <h2>MyBFL LOGIN</h2>
                <div>
                    <input type="text" name="email" id="email" placeholder="Email Address"/><br/>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                    <div id="login_button">
                        <!-- <a href="index.php?username=test"> -->
                        <input type="submit" id="loginbutton"  value="Login" />
                        <!-- </a> -->
                    </div>
                </div>
            </div>
            <div>
                <p id="copyright">Copyright &copy; DTM Sports</p>
            </div>
        </form>
    </body>