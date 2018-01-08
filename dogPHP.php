<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dogPHP
 *
 * @author dmitry
 */


class dogPHP {
    public $dogName;
    public $dogHeight;
    public function bark($howManyTimes) {
        for($i=0; $i<$howManyTimes; $i++){
        echo "woof!";
        echo '<br />';
        }
    }
}

$bigDog = new dogPHP();
$bigDog->dogName = "Valt";
$bigDog->dogHeight = 5;
$bigDog->bark(3);