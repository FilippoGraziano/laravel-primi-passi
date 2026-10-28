<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $text = "This is the Home page: lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore accusamus vitae officia est rem? Hic, 
    voluptate animi. Ipsum labore beatae, sapiente veniam culpa eaque autem rerum porro accusantium magnam.";

    return view('home', ["homeDes" => $text]);
})->name("home");

Route::get('/help', function () {

    $text = "This is the helps page: lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore accusamus vitae officia est rem? Hic, 
    voluptate animi. Ipsum labore beatae, sapiente veniam culpa eaque autem rerum porro accusantium magnam.";

    return view('help', ["helpDes" => $text]);
})->name("help");

Route::get('/information', function () {
    
    $text = "This is the informations page: lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore accusamus vitae officia est rem? Hic, 
    oluptate animi. Ipsum labore beatae, sapiente veniam culpa eaque autem rerum porro accusantium magnam.";

    return view('information', ["informationDes" => $text]);
})->name("information");
