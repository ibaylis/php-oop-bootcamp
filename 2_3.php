<?php
    class User {

        //Properties (attributes)

        public $name;

        // Methods (functions)

        public function sayHello() {
            return $this->name .' says Hello';
        }
    }

    // Instantiate a user object from the user class
    $user1 = new User();

    $user1->name = 'Ian';

    echo $user1 ->name;

    echo '<br><br>';

    echo $user1->sayHello();

    echo '<br><br>';
    //Create new user
    $user2 = new User();
    $user2->name = 'Natasha';
    echo $user2->name;
    echo '<br><br>';
    echo $user2->sayHello();

?>
