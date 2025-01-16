<?php

    class MyCoursesPage extends BasePage
    {
        public function index()
        {
            $keyword = $_GET['keyword'] ?? '';

            $courses = Course::findByStudentId(user()->getId(), $keyword);
            
            $this->render("/my-courses/index", compact("courses"));
        }
    }