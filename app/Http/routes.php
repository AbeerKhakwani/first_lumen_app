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

$app->get('/playgame', function() use ($app){
    session(['one' => $_GET['player_one']]);
    session(['two' => $_GET['player_two']]);
    return view('playgame', ['one' => session('one'),'two' => session('two')]);
});
//
// $app->get('/result' , function() use ($app){
//      $word= $_GET['word'];
//      $newGame= new Scrabble();
//      $result= $newGame->getPoints($word);
//      $hello  = "yes!";
//      return view('result' , ['hello'=> $result, 'no' => $hello]);
// });
//
//
// $app->get('/fun', function() use ($app) {
//     return  "<h1>Fun Page!</h1>";
// });
