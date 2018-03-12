<html>
  <head>
    <title>Leap Years</title>
  </head>
  <body>
    <?php
      for ($i = 2004; $i < 2050; $i = $i + 4) {
        echo "<p>$i</p>";
      }
      for ($i = 10; $i <= 100; $i += 10) {
        echo "<li>$i</li>";
      }

      $languages = array("JavaScript", "HTML/CSS", "PHP", "Python", "Ruby");
 
      foreach ($languages as $lang) {
        echo "<li>$lang</li>";
      }
        
      unset($lang);
    ?>
  </body>
</html>