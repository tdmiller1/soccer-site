<?php
include 'playerData.php';

$connString = "mysql:host=localhost;dbname=soccer_site";
$user = "cs310";
$pass = "cs310";



// $pdo = new PDO($connString,$user,$pass);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $statement = $pdo->prepare('SELECT * FROM attackers Order By Club ASC');
// $statement->execute();

// $count = $statement->rowCount();
// echo "<table>";
// echo "<thead>";
// echo "<th>Name</th>";
// echo "<th>Number</th>";
// echo "<th>Club</th>";
// echo "<th>Position</th>";
// echo "</thead>";

// if($count > 0){
//     $R = $statement->fetchAll(PDO::FETCH_ASSOC);
//     for($x = 0; $x < count($R); $x++){
//         echo "<tr>";
//         $name = $R[$x]['Name'];
//         $number = $R[$x]['Number'];
//         $club = $R[$x]['Club'];
//         $pos = $R[$x]['Position'];
//         echo "<td>$name</td>";
//         echo "<td>$number</td>";
//         echo "<td>$club</td>";
//         echo "<td>$pos</td>";
//         echo "</tr>";
//     }
// }

// echo "</table>";











if(empty($_GET)){
    echo "pick player";
    include 'dashboard.php';
}else if(isset($_GET['search'])){
    include 'dashboard.php';
}else{
    $player = $_GET['player'];

    $connString = "mysql:host=localhost;dbname=soccer_site";
    $user = "cs310";
    $pass = "cs310";
    
    $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_GET['position'] == 'Goalkeeper'){
        $statement = $pdo->prepare("SELECT * FROM goalkeepers WHERE Name = '$player'");
        $statement->execute();
        $count = $statement->rowCount();

        echo "<table>";
        echo "<thead>";
        echo "<th>Name</th>";
        echo "<th>Number</th>";
        echo "<th>Saves</th>";
        echo "<th>Penalty Saves</th>";
        echo "<th>Yellow Card</th>";
        echo "<th>Red Cards</th>";
        echo "<th>Clean Sheets</th>";
        echo "<th>Conceded Goals</th>";
        echo "</thead>";
        
        if($count > 0){
            $R = $statement->fetchAll(PDO::FETCH_ASSOC);
            for($x = 0; $x < count($R); $x++){
                echo "<tr>";
                $name = $R[$x]['Name'];
                $number = $R[$x]['Number'];
                $saves = $R[$x]['Saves'];
                $pensaves = $R[$x]['Penalty_Saves'];
                $yellow = $R[$x]['Yellow_Cards'];
                $red = $R[$x]['Red_Cards'];
                $clean = $R[$x]['Clean_Sheets'];
                $conceded = $R[$x]['Conceded'];
                echo "<td><a class='white' href='playerStats.php?player=$name'>$name</a></td>";
                echo "<td>$number</td>";
                echo "<td>$saves</td>";
                echo "<td>$pensaves</td>";
                echo "<td>$yellow</td>";
                echo "<td>$red</td>";
                echo "<td>$clean</td>";
                echo "<td>$conceded</td>";
                echo "</tr>";
            }
        }
    }else if ($_GET['position'] == 'Defender'){
        $statement = $pdo->prepare("SELECT * FROM defenders WHERE Name = '$player'");
        $statement->execute();
        $count = $statement->rowCount();

        echo "<table>";
        echo "<thead>";
        echo "<th>Name</th>";
        echo "<th>Number</th>";
        echo "<th>Tackles</th>";
        echo "<th>Blocked Shots</th>";
        echo "<th>Interceptions</th>";
        echo "<th>Clearances</th>";
        echo "<th>Clean Sheets</th>";
        echo "<th>Conceded Goals</th>";
        echo "</thead>";
        
        if($count > 0){
            $R = $statement->fetchAll(PDO::FETCH_ASSOC);
            for($x = 0; $x < count($R); $x++){
                echo "<tr>";
                $name = $R[$x]['Name'];
                $number = $R[$x]['Number'];
                $tackles = $R[$x]['Tackels'];
                $blocked = $R[$x]['Blocked_Shots'];
                $intercept = $R[$x]['Interceptions'];
                $clearances = $R[$x]['Clearances'];
                $clean = $R[$x]['Clean_Sheets'];
                $conceded = $R[$x]['Conceded'];
                echo "<td><a class='white' href='playerStats.php?player=$name'>$name</a></td>";
                echo "<td>$number</td>";
                echo "<td>$tackles</td>";
                echo "<td>$blocked</td>";
                echo "<td>$intercept</td>";
                echo "<td>$clearances</td>";
                echo "<td>$clean</td>";
                echo "<td>$conceded</td>";
                echo "</tr>";
            }
        }
    }else{
        $statement = $pdo->prepare("SELECT * FROM attackers WHERE Name = '$player'");
        $statement->execute();
        $count = $statement->rowCount();
        echo "<table>";
        echo "<thead>";
        echo "<th>Name</th>";
        echo "<th>Goals</th>";
        echo "<th>Assists</th>";
        echo "<th>Shots</th>";
        echo "<th>On Target Shots</th>";
        echo "<th>Big Misses</th>";
        echo "<th>Yellow Cards</th>";
        echo "<th>Red Cards</th>";
        echo "<th>Fouls</th>";
        echo "<th>Offside</th>";
        echo "<th>Passes</th>";
        echo "<th>Big Creation</th>";
        echo "<th>Crosses</th>";
        echo "<th>Tackles</th>";
        echo "<th>Blocked Shots</th>";
        echo "<th>Interceptions</th>";
        echo "<th>Clearances</th>";
        echo "</thead>";
        
        if($count > 0){
            $R = $statement->fetchAll(PDO::FETCH_ASSOC);
            for($x = 0; $x < count($R); $x++){
                echo "<tr>";
                $name = $R[$x]['Name'];
                $goals = $R[$x]['Goals'];
                $assists = $R[$x]['Assists'];
                $shots = $R[$x]['Shots'];
                $ontarg = $R[$x]['OnTarget'];
                $misses = $R[$x]['Big_Misses'];
                $yellow = $R[$x]['Yellow_Card'];
                $red = $R[$x]['Red_Card'];
                $fouls = $R[$x]['Fouls'];
                $offside = $R[$x]['Offside'];
                $passes = $R[$x]['Passes'];
                $creation = $R[$x]['Big_Creation'];
                $crosses = $R[$x]['Crosses'];
                $tackles = $R[$x]['Tackels'];
                $blocked = $R[$x]['Blocked_Shots'];
                $intercept = $R[$x]['Interceptions'];
                $clear = $R[$x]['Clearances'];
                echo "<td><a class='white' href='playerStats.php?player=$name'>$name</a></td>";
                echo "<td>$goals</td>";
                echo "<td>$assists</td>";
                echo "<td>$shots</td>";
                echo "<td>$ontarg</td>";
                echo "<td>$misses</td>";
                echo "<td>$yellow</td>";
                echo "<td>$red</td>";
                echo "<td>$fouls</td>";
                echo "<td>$offside</td>";
                echo "<td>$passes</td>";
                echo "<td>$creation</td>";
                echo "<td>$crosses</td>";
                echo "<td>$tackles</td>";
                echo "<td>$blocked</td>";
                echo "<td>$intercept</td>";
                echo "<td>$clear</td>";
                echo "</tr>";
            }
        }
    }


    
    // $statement = $pdo->prepare("SELECT * FROM attackers WHERE Name = '$player'");
    // $statement->execute();
    // $count = $statement->rowCount();
    // echo "<table>";
    // echo "<thead>";
    // echo "<th>Name</th>";
    // echo "<th>Goals</th>";
    // echo "<th>Assists</th>";
    // echo "<th>Shots</th>";
    // echo "<th>On Target Shots</th>";
    // echo "<th>Big Misses</th>";
    // echo "<th>Yellow Cards</th>";
    // echo "<th>Red Cards</th>";
    // echo "<th>Fouls</th>";
    // echo "<th>Offside</th>";
    // echo "<th>Passes</th>";
    // echo "<th>Big Creation</th>";
    // echo "<th>Crosses</th>";
    // echo "<th>Tackles</th>";
    // echo "<th>Blocked Shots</th>";
    // echo "<th>Interceptions</th>";
    // echo "<th>Clearances</th>";
    // echo "</thead>";
    
    // if($count > 0){
    //     $R = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     for($x = 0; $x < count($R); $x++){
    //         echo "<tr>";
    //         $name = $R[$x]['Name'];
    //         $goals = $R[$x]['Goals'];
    //         $assists = $R[$x]['Assists'];
    //         $shots = $R[$x]['Shots'];
    //         $ontarg = $R[$x]['OnTarget'];
    //         $misses = $R[$x]['Big_Misses'];
    //         $yellow = $R[$x]['Yellow_Card'];
    //         $red = $R[$x]['Red_Card'];
    //         $fouls = $R[$x]['Fouls'];
    //         $offside = $R[$x]['Offside'];
    //         $passes = $R[$x]['Passes'];
    //         $creation = $R[$x]['Big_Creation'];
    //         $crosses = $R[$x]['Crosses'];
    //         $tackles = $R[$x]['Tackels'];
    //         $blocked = $R[$x]['Blocked_Shots'];
    //         $intercept = $R[$x]['Interceptions'];
    //         $clear = $R[$x]['Clearances'];
    //         echo "<td><a class='white' href='playerStats.php?player=$name'>$name</a></td>";
    //         echo "<td>$goals</td>";
    //         echo "<td>$assists</td>";
    //         echo "<td>$shots</td>";
    //         echo "<td>$ontarg</td>";
    //         echo "<td>$misses</td>";
    //         echo "<td>$yellow</td>";
    //         echo "<td>$red</td>";
    //         echo "<td>$fouls</td>";
    //         echo "<td>$offside</td>";
    //         echo "<td>$passes</td>";
    //         echo "<td>$creation</td>";
    //         echo "<td>$crosses</td>";
    //         echo "<td>$tackles</td>";
    //         echo "<td>$blocked</td>";
    //         echo "<td>$intercept</td>";
    //         echo "<td>$clear</td>";
    //         echo "</tr>";
    //     }
    // }
}


    // for($i = 0; $i < count($teams); $i++){
    //     for ($j = 0; $j < count($teams[$i]["players"]); $j++){
    //         if($_GET['player'] == $teams[$i]["players"][$j]['name']){
    //             $player = $teams[$i]["players"][$j];
                
    //         }
    //     }
    // }
    // $name = $player['name'];
    //     $image = $player['image'];
    //     $nationality = $player['nationality'];
    //     $club = $player['club'];
    //     $position = $player['position'];
    //     echo "
    //     <div id='card'>
    //         <img id='playerImage' src='images/$image.png'>
    //         <div id='infoCard'>
    //             <h1>$name</h1>
    //             <h1>$club</h1>
    //             <h3>$position</h3>
    //             <h3>$nationality</h3>
    //         </div>
    //     </div>";

?>