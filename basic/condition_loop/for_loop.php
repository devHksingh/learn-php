<?php

echo"Rocket launch countdown: \n";

for($i=10;$i>0;$i--){
 echo"$i ...";
 if(1===$i){
    echo"Lunch ... LiftOFF ! 🚀👩‍🚀";
 }
 sleep(1);// slow down for dramatic effect
}