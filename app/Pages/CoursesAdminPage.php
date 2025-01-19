<?php

    class CoursesAdminPage extends BasePage
    {
        public function index()
        {
            $filters['keyword'] = $_GET['keyword'] ?? '';
            $filters['category_id'] = $_GET['category_id'] ?? '';

            $courses = Course::all($filters);
            $categories = Category::all();
            
            $this->render("/courses/index", compact('courses', 'categories'));
        }

        public function show($id)
        {
            $course = Course::find($id);
            $categories = Category::all();
            $tags = Tag::all();

            $this->render("/courses/edit", compact('course', 'categories', 'tags'));
        }
    }