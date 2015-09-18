<?php
    /**
     * Created by PhpStorm.
     * User: Asus-
     * Date: 18.09.2015
     * Time: 15:39
     */

function test_dump($arg){

    global $USER;
    if($USER->IsAdmin())
    {
        echo '<pre>';
        var_dump($arg);
        echo '</pre>';
    }
}