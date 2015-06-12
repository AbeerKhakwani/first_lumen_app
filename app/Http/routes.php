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
    DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
    $id1=  DB::select("select id from users where name ='". $_GET['player_one']."'");
    $id2=  DB::select("select id from users where name ='". $_GET['player_two']."'");
    $id='';
    $idtwo='';
    foreach($id1 as $userid){
        $id .= $userid['id'];
    }
    foreach($id2 as $userid){
        $idtwo .= $userid['id'];
    }
    return  view('play', ['one' => $player1->name, 'two' => $player2->name, 'id'=>$id, 'id2'=>$idtwo]);
});

$app->get('/result' , function() use ($app){
    $newGame= new Scrabble();

    $id=  $_GET['id'];
    $id2= $_GET['id2'];
    DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
    $query =  DB::select("select * from users where id='".$id ."'");
    $word= "";
    $name= "";
    foreach($query as $user){
        $word .= $user['word'];
        $name.= $user['name'];
    }
    $query2 =  DB::select("select * from users where id='". $id2."'");
    $word2= "";
    $name2 ="";
    foreach($query2 as $user2){
        $word2 .= $user2['word'];
        $name2.= $user2['name'];
    }
    $finalresult1= $newGame->getPoints($word);
    $finalresult2= $newGame->getPoints($word2);
    $bigger= $newGame->bigger($finalresult1,$finalresult2);

    $winner='';

    if ($bigger == -1){

      $winner= $name;
    }
    else{
       $winner= $name2;

    }


    return view('result' , ['result'=> $word, 'result2' => $word2, 'name'=> $name, 'name2' => $name2,'points'=> $finalresult1, 'points2'=>$finalresult2 , 'winner'=>$winner]);

});
//
