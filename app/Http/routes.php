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
    $player1 = New User;
    $player2 = New User;
    $player1->name = $_GET['player_one'];
    $player2->name = $_GET['player_two'];
    $player1->word = $_GET['word_one'];
    $player2->word = $_GET['word_two'];
    $player1->save();
    $player2->save();
    return view('play', ['one' => $player1->name, 'two' => $player2->name]);
});

$app->get('/result' , function() use ($app){
    $newGame= new Scrabble();

  //  $word = DB::table('users')->where('id', '4')->value('word');
      DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
      $query =  DB::select('select word from users where id = 2');
 
     $word= "";
    foreach($query as $user){
        $word .= $user['word'];
       // var_dump($word);
    }
    //$result= $newGame->getPoints($word);
    return view('result' , ['result'=> $word]);
});
//
//
// $app->get('/fun', function() use ($app) {
//     return  "<h1>Fun Page!</h1>";
// });
