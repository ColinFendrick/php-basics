<!DOCTYPE html>
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='style.css'/>
		<title>PHP FTW!</title>
	</head>
	<body>
        <!-- Write your PHP code below!-->
        <p>
            <?php
              //Variables 
              $myName = "Colin";
              $myAge = 27;
              // Returning text
              echo $myName;
              echo $myAge;
              
              // Conditionals
              $items = 8;
              if ($items > 5) {
                echo "You get a discount or something";
              }
              else {
                echo "No discount for you";
              }

              //Switch
              switch (2) {
                case 0:
                  echo 'The value is 0';
                  break;
                case 1:
                  echo 'The value is 1';
                  break;
                case 2:
                  echo 'The value is 2';
                  break;
                default:
                  echo "The value isn't 0, 1 or 2";
              }

            ?>
        </p>   
	</body>
</html>