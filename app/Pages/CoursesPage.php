<?php

    class CoursesPage extends BasePage
    {
        public function index()
        {
            $filters['keyword'] = $_GET['keyword'] ?? '';
            $filters['category_id'] = $_GET['category_id'] ?? '';
            $filters['min_price'] = $_GET['min_price'] ?? '';
            $filters['max_price'] = $_GET['max_price'] ?? '';

            $courses = Course::all($filters);
            $categories = Category::all();
            
            $this->render("/courses/index", compact('courses', 'categories'));
        }

        public function show($id)
        {
            $course = Course::find($id);
            $relatedCourses = Course::limit(4);

            $this->render("/courses/show", compact('course', 'relatedCourses'));
        }
    }