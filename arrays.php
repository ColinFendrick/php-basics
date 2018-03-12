<html>
  <head>
    <title>Woot, Arrays!</title>
  </head>
  <body>
    <?php
      $lunch = array("Egg", "Tomato", "Beans");
      echo $lunch[1];
      echo $lunch{0};
      $lunch[2] = "Beans? Fuck beans we're having gouda cheese on this.";
      echo $lunch[2];

      //Modifying and deleting arrays
      unset($lunch[1]);
      unset($lunch);

    ?>    
  </body>
</html>