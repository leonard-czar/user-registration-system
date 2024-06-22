<?php

//add database credentails here;
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
        //check if database name was provided
        if (!empty(DB_DATABASE_NAME)) {
            // open connection to mysql server
            $this->dbconnect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
        }

    }


    public function validate()
    {
        $errors = [];

        // validate username
        if (empty($this->username)) {

            $errors[] = 'Username field is required.';
        } else {
            // check if username contain letters and numbers
            if (!ctype_alnum($this->username)) {
                $errors[] = 'Username must only contain letters and numbers.';
            }
            // check if username is at least 3 characters long.
            if (strlen($this->username) < 3) {
                $errors[] = 'Username must be at least 3 characters long.';
            }
            // check if username is not longer than 20 characters.
            if (strlen($this->username) > 20) {
                $errors[] = 'Username must not be longer than 20 characters.';
            }
        }


        // validate email
        if (empty($this->email)) {
            $errors[] = 'Email address field is required.';

        } else {
            // check if email provided is in a valid format
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Invalid email address.';
            }
        }


        // validate password
        if (empty($this->password)) {
            $errors[] = 'Password field is required.';

        } else {
            // check if password is at least 8 characters long.
            if (strlen($this->password) < 8) {
                $errors[] = 'Password must be at least 8 characters long.';
            }
            // check if password contain at least one lowercase letter.
            if (!preg_match('/[a-z]/', $this->password)) {
                $errors[] = 'Password must contain at least one lowercase letter.';
            }
            // check if password contain at least one uppercase letter.
            if (!preg_match('/[A-Z]/', $this->password)) {
                $errors[] = 'Password must contain at least one uppercase letter.';
            }
            // check if password contain at least one number.
            if (!preg_match('/[0-9]/', $this->password)) {
                $errors[] = 'Password must contain at least one number.';
            }
        }


        return $errors;
    }


    // creating and storing user logic here
    public function createUser()
    {

        //check if database was provided
        if (!empty(DB_DATABASE_NAME)) {

            $password = password_hash($this->password, PASSWORD_DEFAULT);//hash user password 
            // using prepare statement to prevent sql injections
            $stmt = $this->dbconnect->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
            // binding parameters
            $stmt->bind_param("sss", $this->username, $this->email, $password);
            // execute query
            $stmt->execute();
            //check for error
            if ($stmt->error) {
                // return user friendly message if an error occurs
                return "Oops! something happened. " . $stmt->error;
            } else {
                // return true if successful and no error 
                return true;
            }
        }
        // return true if no database was provided
        return true;

    }


}
