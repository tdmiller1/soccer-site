<?php 
include 'playerData.php';

for($i = 0; $i < count($teams); $i++){
    for ($j = 0; $j < count($teams[$i]["players"]); $j++){
        $player = $teams[$i]["players"][$j]; 
        playerCard($player["name"], $teams[$i]["teamName"], $player["nationality"]);
    }
}

function playerCard($name, $team, $stat){
    echo 
    "<tr>
        <td>
            <a style='color:black' href='playerStats.php?player=$name'>$name</a>
        </td>
        <td>$team</td>
        <td>$stat</td>
    </tr>
    ";
}

?>