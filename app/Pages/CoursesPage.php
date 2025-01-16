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
            $course = Course::find($id);
            $relatedCourses = Course::limit(4);

            $this->render("/courses/show", compact('course', 'relatedCourses'));
        }
    }