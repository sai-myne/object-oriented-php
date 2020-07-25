<?php 

    class User {

        public $username;
        private $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){            
            return "$this->email added a new friend";
        }

        // getters
        public function getemail(){
            return $this->email;
        }


        // setters
        public function setemail($email){
            if(strpos($email, '@') > -1){
                $this->email = $email;
            }
            
        }

    }

    class AdminUser extends User{

        public $level;

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }

    }

    $userOne = new User('mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
    $userThree = new AdminUser('yohsi', 'yoshi@thenetninja.co.uk', 5);

    echo $userThree->username.'<br>';
    echo $userThree->level.'<br>';
    echo $userThree->getemail().'<br>';




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