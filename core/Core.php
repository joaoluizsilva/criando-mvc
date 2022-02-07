<?php
Class Core{
    public function run(){
        // $url = filter_input(INPUT_GET, 'request');
        // echo $url;
        $url = '/';
        if (isset($_GET['request'])){
            $url .= $_GET['request'];
        }
        echo "URL: ".$url;
    }
}