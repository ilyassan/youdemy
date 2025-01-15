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

            echo "x";
            print_r($_POST);
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

            
            // Validate the first name
            if(empty($data['first_name'])){
                $errors['first_name_err'] = 'Please enter your first name.';
            }
    
            // Validate the last name
            if(empty($data['last_name'])){
                $errors['last_name_err'] = 'Please enter your last name.';
            }
            
            // Validate Email
            if(empty($data['email'])){
                $errors['email_err'] = 'Please enter email.';
            }elseif(User::findUserByEmail($data['email'])){
                $errors['email_err'] = 'Email is already used.';
            }
    
            // Validate Password
            if(empty($data['password'])){
                $errors['password_err'] = 'Please enter password.';
            }elseif(strlen($data['password']) < 6){
                $errors['password_err'] = 'Password must be at least 6 characters.';
            }

            // Validate the last name
            if(empty($data['term'])){
                $errors['term_err'] = 'Please accept our terms and conditions.';
            }
    
            // Validate Confirm Password
            if(empty($data['confirm_password'])){
                $errors['confirm_password_err'] = 'Please confirm password';
            }elseif($data['password'] != $data['confirm_password']){
                $errors['confirm_password_err'] = 'Passwords do not match.';
            }


            // Make sure errors are empty (There's no errors)
            if(empty(array_filter($errors))){
                echo "valid";
                return;
            }
            else{
                // Load view with errors
                flash("error", array_first_not_null_value($errors));
                redirect('signup');
            }
        }
    }