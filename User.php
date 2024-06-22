<?php

// database credentails;
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE_NAME", "");

class User
{
    private $username;
    private $email;
    private $password;
    private $dbconnect;

    public function __construct($username, $email, $password)
    {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        if (!empty(DB_DATABASE_NAME)) {
            
            $this->dbconnect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
        }

    }


    public function validate()
    {
        $errors = [];

        // Validate username
        if (empty($this->username)) {

            $errors[] = 'Username field is required.';
        } else {
            if (!ctype_alnum($this->username)) {
                $errors[] = 'Username must only contain letters and numbers.';
            }
            if (strlen($this->username) < 3) {
                $errors[] = 'Username must be at least 3 characters long.';
            }
            if (strlen($this->username) > 20) {
                $errors[] = 'Username must not be longer than 20 characters.';
            }
        }


        // Validate email
        if (empty($this->email)) {
            $errors[] = 'Email address field is required.';

        } else {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Invalid email address.';
            }
        }


        // Validate password
        if (empty($this->password)) {
            $errors[] = 'Password field is required.';

        } else {

            if (strlen($this->password) < 8) {
                $errors[] = 'Password must be at least 8 characters long.';
            }
            if (!preg_match('/[a-z]/', $this->password)) {
                $errors[] = 'Password must contain at least one lowercase letter.';
            }
            if (!preg_match('/[A-Z]/', $this->password)) {
                $errors[] = 'Password must contain at least one uppercase letter.';
            }
            if (!preg_match('/[0-9]/', $this->password)) {
                $errors[] = 'Password must contain at least one number.';
            }
        }


        return $errors;
    }


    public function createUser()
    {
        // Creating and storing user logic here
        if (!empty(DB_DATABASE_NAME)) {

            //code...
            $password = password_hash($this->password, PASSWORD_DEFAULT);

            $stmt = $this->dbconnect->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");

            $stmt->bind_param("ssss", $this->username, $this->email, $password);


            $stmt->execute();


            if ($stmt->error) {

                return "Oops! something happened. " . $stmt->error;
            } else {

                return true;
            }
        }

        return true;

    }


}
