<?php
    class TeachersAdminPage extends BasePage
    {
        public function index()
        {
            $teachers = Teacher::all();

            $this->render("/teachers/index", compact('teachers'));
        }
    }