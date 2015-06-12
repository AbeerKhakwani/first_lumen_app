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
    $_SESSION['one']= $_GET['player_one'];
    $_SESSION['two'] = $_GET['player_two'];
    $player1->word = $_GET['word_one'];
    $player2->word = $_GET['word_two'];
    $player1->save();
    $player2->save();
    return  view('play', ['one' => $player1->name, 'two' => $player2->name]);
});

$app->get('/result' , function() use ($app){
    $newGame= new Scrabble();

  //word = DB::table('users')->where('name', $_SESSION['one'])->value('word');
      DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
    $query =  DB::select("select word from users where name ='".$_SESSION['one']."'");
     $word= "";
    foreach($query as $user){
        $word .= $user['word'];
       // var_dump($word);
    }
     $query2 =  DB::select("select word from users where name ='".$_SESSION['two']."'");
     $word2= "";
    foreach($query2 as $user2){
        $word2 .= $user2['word'];
    
    }
    $finalresult1= $newGame->getPoints($word);
    $finalresult2= $newGame->getPoints($word2);
    return view('result' , ['result'=> $word, 'one'=>$_SESSION['one'],'two'=>$_SESSION['two'], 'result2' => $word2, 'points'=> $finalresult1, 'points2'=>$finalresult2 ]);
});

