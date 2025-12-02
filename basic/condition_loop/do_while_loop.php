<?php

// dice roll 
do{
 $diceRoll = rand(1,6);
 echo "You rolled a $diceRoll \n";
 if(6 === $diceRoll){
    echo "Congrats! You hit the jackpot \n";
 }
 echo "Roll Again? (y/n) ";
 $rollAgain = trim(fgets(STDIN));

}while($rollAgain === "y");