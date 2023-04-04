<?php
$colors = array("red", "black", "pink", "white");
array_splice($colors, 2); // remove all elements from $colors, starting from (and including) the element at position index [2]
print_r($colors); //Array ([0] => red [1] => black)
//colors become ("red","black")

echo"<br/>";
$awardWinners = array(
    "Gold"=>"Max",
    "Silver"=>"Boots",
    "Bronze" => "Dora",
    "Wood" => "Swiper"
);
array_splice($awardWinners,-3); # we want array_splice() to remove all elements from $awardWinners, starting from(including) position index[1]
//remove all elements from awardWinners starting from(and including) position index[1]
print_r($awardWinners); //Array ( [Gold] => Max )

echo "<br/>";
$pets = array("corgi", "poodle", "golden retriever", "jack russell");
array_splice($pets, 1, 2); // removing elements from position index[1] to index[2]
print_r($pets); //Array ( [0] => corgi [1] => jack russell )
