<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


$app->get('/', function() use ($app){
    return view('view1');
});

$app->post('/playgame', function() use ($app){
    $player_one = $_GET['player_one'];
    $player_two = $_GET['player_two'];

    // Session::put('firstplayer', $player_one);
    // Session::put('secondplayer', $player_two);
    // session(['firstplayer'=> $player_one, 'secondplayer', $player_two]);

    $value = session('firstplayer');
    return view('playgame', ['one'=> $value]);
});

$app->get('/result' , function() use ($app){
     $word= $_GET['word'];
     $newGame= new Scrabble();
     $result= $newGame->getPoints($word);
     $hello  = "yes!";
     return view('result' , ['hello'=> $result, 'no' => $hello]);
});


$app->get('/fun', function() use ($app) {
    return  "<h1>Fun Page!</h1>";
});
