<?php

//class dongvat {
//
//    public $chan = 4;
//
//    abstract function run($chan);
//
//    public function eat() {
//        
//    }
//}
//
//class concho {
//
//    public function run($chan) {
//        echo "chay bang 4chan";
//    }
//}
//
//class connguoi extends dongvat {
//
//    public function run($chan) {
//        echo "chay bang 2 chan";
//    }
//}
//
//$concho = new concho();
//
//$concho->run();


interface dongvat() {
    function run();
    function eat();
    function sleep();
}

class concho implements dongvat {

    public function run() {
        
    }

    public function eat() {
        
    }

    public function sleep() {
        
    }
}
