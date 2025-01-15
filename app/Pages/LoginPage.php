<?php

    class LoginPage extends BasePage
    {
        public function index()
        {
            $this->render("/auth/login");
        }
    }