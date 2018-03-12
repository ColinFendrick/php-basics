<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
	</head>
	<body>
      <p>
        <?php
            class Person {
             public $isAlive = true;
             public $firstname;
             public $lastname;
             public $age;

             public function __construct($firstname, $lastname, $age) {
               $this->firstname = $firstname;
               $this->lastname = $lastname;
               $this->age = $age;
             }

             public function greet() {
               return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
             }
            }
            $teacher = new Person('boring', 'teacher', 12345);
            $student = new Person('colin', 'isawesome', 1000);
            echo $student->greet();
        ?>
      </p>
    </body>
</html>