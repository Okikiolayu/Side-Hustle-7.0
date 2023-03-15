<?php

$age = 18;
$havecard =true;
$ward = 020;

if($age >= 18){
    if($havecard){

        if($ward===020){
echo "you are eligible to vote";
        }else{
            echo "you are not eligible to vote because you are not in ward 020";
        }
        
    }else{
        echo "you are not eligible to vote because you don't have voters card";
    }
}else{
    echo "you are not up to 18";
}

?>