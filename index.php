<?php 

    class User {

        public $username;
        public $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){            
            return "$this->email added a new friend";
        }

    }

    $userOne = new User('mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';


    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>