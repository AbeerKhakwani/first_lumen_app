<!doctype html>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <title>Epi-Scrabble!</title>
    </head>
    <body>
        <div id="main">
            <h1>Let's Play Epi-Scrabble!</h1>
            <form action='/playgame'>
              <label>Player One:</label>
              <input type="text" name="player_one">
              <label>Player One's Word:</label>
              <input type="text" name="word_one">
              <label>Player Two:</label>
              <input type="text" name="player_two">
              <label>Player Two's Word:</label>
              <input type="text" name="word_two">
              <button type='submit' class='btn btn-info'>It's on!</button>
           </form>
       </div>
    </body>
</html>
