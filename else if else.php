<?php
$age = "18";
$havecards= "false";
$votersward = "020"; 


switch ($age) {
    case  "18":
        echo "voters eligible to vote";
        
        echo "you are under age";
        break;

    case "true":
        echo "voters eligible to vote";
        
        echo "voters don't have card";
         break;
    case "020":
        echo "voters eligble to vote";
        break;
    default:
    echo "you are neither in this ward, above 18,nor have card";
    
}   
?>