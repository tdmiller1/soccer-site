<?php 
include 'playerData.php';

$connString = "mysql:host=localhost;dbname=soccer_site";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$statement = $pdo->prepare('SELECT * FROM attackers');
$statement->execute();

$count = $statement->rowCount();
$connString = "mysql:host=localhost;dbname=soccer_site";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$statement = $pdo->prepare('SELECT Name, Number, Club, Position FROM attackers UNION SELECT Name, Number, Club, Position FROM defenders UNION SELECT Name, Number, Club, Position FROM goalkeepers ORDER BY Club ASC');
$statement->execute();

$count = $statement->rowCount();
echo "<table>";
echo "<thead>";
echo "<th>Name</th>";
echo "<th>Number</th>";
echo "<th>Club</th>";
echo "<th>Position</th>";
echo "</thead>";

if($count > 0){
    $R = $statement->fetchAll(PDO::FETCH_ASSOC);
    for($x = 0; $x < count($R); $x++){
        echo "<tr>";
        $name = $R[$x]['Name'];
        $number = $R[$x]['Number'];
        $club = $R[$x]['Club'];
        $pos = $R[$x]['Position'];
        echo "<td><a class='white' href='playerStats.php?player=$name&position=$pos'>$name</a></td>";
        echo "<td>$number</td>";
        echo "<td>$club</td>";
        echo "<td>$pos</td>";
        echo "</tr>";
    }
}



// for($i = 0; $i < count($teams); $i++){
//     for ($j = 0; $j < count($teams[$i]["players"]); $j++){
//         $player = $teams[$i]["players"][$j]; 
//         playerCard($player["name"], $teams[$i]["teamName"], $player["nationality"]);
//     }
// }


// function playerCard($name, $team, $stat){
//     echo 
//     "<tr>
//         <td>
//             <a class='white' href='playerStats.php?player=$name'>$name</a>
//         </td>
//         <td>$team</td>
//         <td>$stat</td>
//     </tr>
//     ";
// }

?>