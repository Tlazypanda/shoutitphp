<?php include 'database.php' ;?>
<?php

//create select query
$query = "SELECT * FROM shouts ORDER BY id";
$shouts = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link href='https://fonts.googleapis.com/css?family=Amatic SC|Lobster|Roboto|Open Sans|Droid Sans|Montserrat|Ubuntu|Rubik' rel='stylesheet'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     
    </head>
<body >
    <div id="container" class="jumbotron">
    <header>
        <h1 >
        Shout it!</h1></header>
    <div id="shouts">
        <ul>
            <?php while($row = mysqli_fetch_assoc($shouts)): ?>
            <li class="shout"><span><?php echo $row['time'] ?>-
            </span><strong>
                <?php echo $row['user'] ?>:</strong>
            
                <?php echo $row['message'] ?>
            
            </li>
            
            <?php endwhile; ?>
            
        
        </ul>
        </div>
    
        <div id="input">
            <?php if(isset($_GET['error'])):?>
            <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
        <form method="post" action="process.php">
            <input type="text" name="user" placeholder="Enter your name" />
            <input type="text" name="message" placeholder="Enter a message" />
            <br>
            <input class="shout-btn" type="submit" name="submit" value="Shout it!"/>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    </body>
</html>