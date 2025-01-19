<?php
    class StudentsAdminPage extends BasePage
    {
        public function index()
        {
            $filters["keyword"] = $_GET['keyword'] ?? '';
            $filters["status"] = $_GET['status'] ?? '';
            $filters["banned"] = false;

            $students = Student::all($filters);

            $this->render("/students/index", compact("students"));
        }
    }