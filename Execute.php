<?php
require "Image.php";
$ins = new Image($url); //an instance of your class
var_dump($ins->getImages()); //must return an array of image URLs from input url
