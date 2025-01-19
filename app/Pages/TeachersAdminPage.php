<?php
    class TeachersAdminPage extends BasePage
    {
        public function index()
        {
            $filters["keyword"] = $_GET['keyword'] ?? '';
            $filters["status"] = $_GET['status'] ?? '';

            $teachers = Teacher::all($filters);

            $this->render("/teachers/index", compact('teachers'));
        }
    }