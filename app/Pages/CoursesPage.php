<?php

    class CoursesPage extends BasePage
    {
        public function index()
        {
            $courses = Course::all();
            
            $this->render("/courses/index", compact('courses'));
        }

        public function show($id)
        {
            $this->render("/courses/show");
        }
    }