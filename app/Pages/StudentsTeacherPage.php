<?php
    class StudentsTeacherPage extends BasePage
    {
        public function index()
        {
            $keyword = $_GET['keyword'] ?? '';

            $students = Student::teacherStudents(user()->getId(), $keyword);

            $this->render("/students/index", compact('students'));
        }
    }