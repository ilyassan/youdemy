<?php

    class MyCoursesPage extends BasePage
    {
        public function index()
        {
            $courses = Course::findByStudentId(user()->getId());
            
            $this->render("/my-courses/index", compact("courses"));
        }
    }