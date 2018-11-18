<?php 
$playerArray = array('John', 'Dan', 'Jack', 'Dale');
for($i = 0; $i < count($playerArray); $i++){
    playerCard($playerArray[$i], "team name", "stat");
}

function playerCard($name, $team, $stat){
    echo 
    "<tr>
        <td>$name</td>
        <td>$team</td>
        <td>$stat</td>
    </tr>
    ";
}

?>