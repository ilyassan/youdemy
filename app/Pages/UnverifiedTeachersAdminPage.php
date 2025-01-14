<?php
    class UnverifiedTeachersAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/unverified-teachers/index");
        }
    }