<?php
    class User {
        public $name;
        public $age;

        public function __construct($name, $age){
            //echo 'constructor ran...';
            echo '<br><br>';            
            echo 'Class ' . __CLASS__ . ' instantiated';
            echo '<br><br>';      
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            return $this->name . ' Says Hello';
        }

        

        public function __destruct() {
            echo '<br><br>';
            echo 'destructor ran...';
        }
    }

    $user1 = new User('Ian', 34);

    echo $user1->name . ' is ' . $user1->age . ' years old';
    echo '<br><br>';
    echo $user1->sayHello();

    echo '<br><br>';

    $user2 = new User('Natasha', 32);

    echo $user2->name . ' is ' . $user2->age . ' years old';
    echo '<br><br>';
    echo $user2->sayHello();
?>
