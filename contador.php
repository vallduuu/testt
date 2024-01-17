<?php

    $count=$_COOKIE['count'];
    if(isset($count)){
            $count++;
    }else{
            $count=0;
    }

    setvookie('count',$count);
    echo $count;
