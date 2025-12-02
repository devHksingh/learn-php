<?php


$password = "123456";
$attempts =0;
$maxAttempts = 6;

// guess the password game

while($attempts< $maxAttempts){
    echo "Guess the password .Enter your guss password below \n ";
    $guess = trim(fgets(STDIN));
    $attempts++;
    if($guess === $password){
        echo"You have unlocked treasure💎💎\n";
        break;
    }else{
        echo"You have to reguss the password again!\n";
    }
    if($attempts>$maxAttempts){
        echo"You have out of attempt\n";
        break;
    }else{
        echo"Your cuurent guess attempt is $attempts out of $maxAttempts  (" .($maxAttempts-$attempts) .")\n";
    }

}