<?php

    class SignupPage extends BasePage
    {
        public function index()
        {
            $this->render("/auth/signup");
        }
    }