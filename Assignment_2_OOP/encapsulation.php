<?php

class User {
    private $password;
    
    // Setter method to securely set the password
    public function setPassword($password) {
        $this->password = $password;
    }

    // Getter method to retrieve the password
    public function getPassword() {
        return $this->password;
    }
}

$user = new User();
$user->setPassword(1234);
echo "User Password: " . $user->getPassword();
?>
