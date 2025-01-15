<?php

    class SignupPage extends BasePage
    {
        public function index()
        {
            $this->render("/signup");
        }

        public function signup()
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = [
                'role' => trim($_POST['role']),
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'term' => trim($_POST['term'] ?? '')
            ];

            $errors = [
                'role_err' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'term_err' => ''
            ];

            print_r($data);
            return;
        }
    }