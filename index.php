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

              //Switch falling through
              $int = 8;
              switch($int):
                case 0:
                  echo 'I don\'t know if I like this';
                  break;
                case 1:
                case 2:
                case 3:
                  echo 'int is somewhere between 1 and 3';
                  break;
                case 4:
                case 5:
                  echo 'int is eiether 4 or 5';
                  break;
                default:
                  echo 'I don\'t know how much \$int is';
                  break;

            ?>
        </p>   
	</body>
</html>