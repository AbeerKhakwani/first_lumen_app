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
class User extends Illuminate\Database\Eloquent\Model{

}

$app->get('/', function() use ($app){
    return view('view1');
});

$app->get('/playgame', function() use ($app){
    //Session::put('one',$_GET['player_one']);
    //$_GET['player_one'];
    $user =New User;
    $user->name ='Abeer';
    $user->lname ='Liz';
    $user->save();
    return 'All Done';
});
//
$app->get('/result' , function() use ($app){
    $word= $_GET['word'];
    $newGame= new Scrabble();
    $result= $newGame->getPoints($word);
    return view('result' , ['result'=> $result, ]);
});
//
//
// $app->get('/fun', function() use ($app) {
//     return  "<h1>Fun Page!</h1>";
// });
