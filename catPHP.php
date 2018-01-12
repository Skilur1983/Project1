<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of catPHP
 *
 * @author dmitry
 */
class catPHP {
    public $catName;
    public $catHeight;
            
    public function __construct($catName, $catHeight){
        $this->catName = $catName;
        $this->catHeight = $catHeight;
    }
    
    public function whoMeows(){
        echo $this->catName." meowed";
        echo '<br />';
    }
}

$CuteCat = new catPHP("Barsik", 5);
$CuteCat->whoMeows();
var_dump($CuteCat);
