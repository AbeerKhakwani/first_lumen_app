<!-- View stored in resources/views/greeting.php -->

<!doctype html>
<html>
   <link rel='stylesheet' type='text/css' href='css/style.css'>
    <head>
        <title>Welcome!</title>
    </head>
    <body>
        <h1>Hello, <?php echo $name; ?> </h1>
        <a href='/fun'>Fun!</a>
        <form  action='/result'>
          Word:<br>
          <input type="text" name="word">
          <button type='submit'>Submit</button>
       </form>
    </body>
</html>
