<html>
    <head>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <title>Epi-Scrabble!</title>
    </head>
    <body>
        <div id="main">
        <h1>Welcome, <?php echo $one . ' & ' . $two ?></h1>

        <form action="/result"  method="get">
            <input type="text"  name="id" value= <?php echo $id ?> hidden>
            <input type="text"  name="id2" value= <?php echo $id2 ?> hidden>
            <button class="btn btn-danger">See Who Won!</button>
        </form>
    </div>
    </body>
</html>
