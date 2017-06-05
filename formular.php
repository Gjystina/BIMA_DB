  <html>
  <head>
    <title>Login</title>
  </head>
  	 <style type="text/css">
h2{
	color: #36B59E;
}
</style>
</head>
  <body>
   <?php
  <form name="eingabe" action="formular_verarbeiten.php" method="get">
    <p><strong>Wie geht es dir?</strong></p>
    <input type="radio" name="zustand" value="1" /> Super <br />
    <input type="radio" name="zustand" value="2" /> Gut <br />
    <input type="radio" name="zustand" value="3" /> Wie immer <br />
    <input type="radio" name="zustand" value="4" /> Geht so <br />
    <input type="radio" name="zustand" value="5" /> Schlecht <br />
 
   
</form>

  <form name="eingabe" action="formular.php" method="get">
    <p><strong>Was moechtest du gerade machen?</strong></p>
    <input type="radio" name="zustand" value="6" /> Volleyball spielen <br />
    <input type="radio" name="zustand" value="7" /> Computer spielen <br />
    <input type="radio" name="zustand" value="8" /> Schlaffen <br />
    <input type="radio" name="zustand" value="9" /> ein Buch lesen <br />
   
 
</form>



<div id="page-wrap">
<h2>Feedback</h2>
    <p id="name-area"></p>
    <div id="feedback-wrap"><div id="feedback-area"></div></div>
    
    <form action="projekt1.php" method="POST">
        <p> Please tell us your opinion about our service: </p>
        <textarea id="sendie" maxlength = '100'></textarea>	
		<input type="submit" name="button" value="Send"/>
		<?php
    $function = $_POST['function'];
    $log = array();
    if($function) {
    
       ('getState'):
           if (file_exists('meinung.txt')) {
               $lines = file('meinung.txt');
           }
           $log['state'] = count($lines); 
    }
?>
    </form>

</div>
	 

  </body>
  </html>