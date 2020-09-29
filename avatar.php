<?php

require "vendor/autoload.php";


function avatar(int $size,array $colors){
    
    $midsize = ceil($size/2);

    //on créé un tableau 
    $tableauavatar=[];

    for ($x=0 ; $x<$size ; $x++) {

        $tableauavatar[]=[];
    
        //on créé une boucle pour ajouter le nombre de couleur en fonction de la taille choisie
        for ($y=0 ; $y<$size ; $y++){
     
            if($y<$midsize) {
                //on tir au sort le choix des couleurs
                $randcolors = array_rand(array_flip($colors), 1);
                
                //on l'ajoute au tableau
                $tableauavatar[$x][$y]= $randcolors;
            } else {
                $tableauavatar[$x][$y]=$tableauavatar[$x][$size-$y-1]; 
            }
            
        }
    
    }

    return $tableauavatar;
}



$monavatar = avatar(5,["yellow","red","green"]);

//on affiche le resultat
dump ($monavatar);