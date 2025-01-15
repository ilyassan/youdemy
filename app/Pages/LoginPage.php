<?php

    class LoginPage extends BasePage
    {
        public function index()
        {
            $this->render("/login");
        }

        public function login()
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

            $errors = [
                'email_err' => '',
                'password_err' => '',
            ];
    
            print_r($data);
            return;
        }
    }