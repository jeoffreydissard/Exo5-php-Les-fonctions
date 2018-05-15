<?php
function agegenre($age, $genre){
    if($age >= 18 && $genre == "Homme"){
        echo "Vous êtes un homme et vous êtes majeur";
    } elseif ($age < 18 && $genre == "Homme"){
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($age >= 18 && $genre == "Femme") {
        echo "Vous êtes une femme et vous êtes majeur";
    } else {
        echo "Vous êtes une femme et vous êtes mineur";
    }
}
agegenre(23, "Homme");
?>