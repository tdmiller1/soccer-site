<?php
include 'playerData.php';
if(empty($_GET)){
    echo "<h4>&nbsp&nbsp&nbsp&nbsp
    Select Player for individual stats</h4>
    <table style='border:0px'>
            <tr>
                <th style='width:150px'>Name</th>
                <th style='width:150px'>Team</th>
                <th style='width:150px'>Nationality</th>
            </tr>
    ";
    include 'dashboard.php';
    echo "</table>";
}else{
    for($i = 0; $i < count($teams); $i++){
        for ($j = 0; $j < count($teams[$i]["players"]); $j++){
            if($_GET['player'] == $teams[$i]["players"][$j]['name']){
                $player = $teams[$i]["players"][$j];
                
            }
        }
    }
    $name = $player['name'];
        $image = $player['image'];
        $nationality = $player['nationality'];
        $club = $player['club'];
        $position = $player['position'];
        echo "
        <div id='card'>
            <img id='playerImage' src='images/$image.png'>
            <div id='infoCard'>
                <h1>$name</h1>
                <h1>$club</h1>
                <h3>$position</h3>
                <h3>$nationality</h3>
            </div>
        </div>";
}
?>