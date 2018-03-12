<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public  $isAlive = true;
          
          public function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        //built-in function for finding if an object is of a given class
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        //built-in fn for if an object has a property
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        //bbuilt-in fn for if an object has a given method
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }

        class Ninja extends Person {
          const stealth = "MAXIMUM";
        }

        //use '::' to get consts from am object
        echo Ninja::stealth;

        class King extends Person {
          public static function proclaim() {
            echo "A kingly procolmation";
          }
        }
        //Access statics in a class with the '::' operator
        echo King::proclaim();


      ?>
    </p>
  </body>
</html>