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
            }
            $teacher = new Person();
            $student = new Person();
            echo $teacher->isAlive;
        ?>
      </p>
    </body>
</html>