<?php 
include 'playerData.php';


for($i = 0; $i < count($teams); $i++){
    $team = $teams[$i];
    $name = $team['teamName'];
    $wins = $team['wins'];
    $losses = $team['losses'];
    $goals = $team['goals'];
    $matches = $team['matchesPlays'];
    
    
    echo 
    "
    <tr>
        <td>
        $name    
        </td>
        <td>$matches</td>
        <td>$wins</td>
        <td>$losses</td>
        <td>$goals</td>
    </tr>
    ";
}

?>