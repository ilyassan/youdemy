<?php
    class StudentsAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/students/index");
        }
    }