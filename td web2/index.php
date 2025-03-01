<?php

$Tab = array('12h5', '5m', 'AK !5r', '675', '34TF');
// Q1
$s = 0;
foreach($Tab as $item ){
    for ($i=0; $i < strlen($item) ; $i++) { 
        if(is_numeric($item[$i])){
            $s +=$item[$i];
        }
    }
}
echo $s

//Q2
$Tab = array("3345","1246","195");
foreach($Tab as $item ){
    if(strlen($item) == 1){
        echo $item."dilaté";
        continue;
    }
    $ok = 1;
    for ($i=0; $i < strlen($item) - 1 ; $i++) { 
        if($i != strlen($item)-3){
            if($item[$i+1] == $item[$i] || $item[$i+1] == $item[$i]+1 || $item[$i+2] == $item[$i]+2){
                ok = 0;
                break; 
        }else{
            if($item[$i+1] == $item[$i] || $item[$i+1] == $item[$i]+1){
                ok = 0;
                break;
            }
        }
        }
    }
    if(ok == 1){
        echo $item."est dilaté";
    }else{
        echo $item."n'est pas dilaté";
    }
}

//Q3
$tab = array("01234567","01234567","01234567")
?>
<table>
    <tr>
        <th>indice</th>
        <th>Somme</th>
    </tr>
    <?php
    $i = 0
    foreach($tab as $item){
        $s = 0; 
        for ($i=0; $i < strlen($item) ; $i++) { 
            $s += $item[$i];
        }
        echo "<tr><td>".$i."</td></tr>";
        echo "<tr><td>".$s."</td></tr>";
        $i++;
    }
    ?>

</table>

<?php
//Q4
$ch = "php est un langage de programation";
$res = "";
foreach($ch as $c){
    if ($c == ' '){
        $res += '<br/>';
    }else{
        $res += $c;
    }
}
echo str_replace('php', 'PHP', $res);

//Q5
$utilisateur[
                ['nom'=>'Tounsi', 'mail'=>'Tounsi@gmzil.com'],
                ['nom'=>'Tounsi', 'mail'=>'Tounsi@gmzil.com'],
                ['nom'=>'Tounsi', 'mail'=>'Tounsi@gmzil.com'],
            ]
echo "<h1>Parcourir un tableau multidimensionnel</h1>";
echo "<fidlest><legend>Les Utilisateurs</legend>";
foreach($utilisateur as $line){
    $i = 0;
    foreach($line as $item){
        echo "<span>utilisateur: </span>".$i."<br/>";
        echo "<span>nom: </span>".$item["nom"]."<br/>";
        echo "<span>mail : </span>".$item["mail"]."<br/>";
    }
}
echo "</fidlest>";
?>
