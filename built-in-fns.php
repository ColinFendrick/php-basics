<html>
  <p>
    <?php
      // String functions
      $name = "Colin";
      print substr($name, 0, 3);
      print strtoupper($name);
      print strtolower($name);
      if (strpos($name, 'h')) {
        print strpos($name, 'h');
      }
      else {
        print 'Sorry, no \'h\' in \'Colin\'';
      }

      //Math Functions
      print round(M_PI);
      print round(M_PI, 4);
      // prints a number between 0 and 32767
      print rand();
      // prints a number between 1 and 10
      print rand(1,10);
      // print random letter from $name
      print substr($name, rand(0, strlen($name) - 1), 1);


      //Array Functions
      $myArray = array(1, 2, 'pumpkin', 4, 5);
      unset($myArray[2]);
      array_push($myArray, 3);
      sort($myArray);
      // reverse
      rsort($myArray);
      // prints "1, 2, 3, 4, 5"
      join(', ', $myArray); 
      

      
      



    ?>
  </p>
</html>