<?php

    class CoursesTeacherPage extends BasePage
    {
        public function index()
        {
            $filters['keyword'] = $_GET['keyword'] ?? '';
            $filters['category_id'] = $_GET['category_id'] ?? '';
            $filters['teacher_id'] = user()->getId();

            $coursesTotalCount = Course::countByFilter($filters);
            $courses = Course::all($filters);
            $categories = Category::all();
            
            $this->render("/courses/index", compact('courses', 'categories', 'coursesTotalCount'));
        }

        public function create()
        {
            $this->render("/courses/create");
        }

        public function edit($id)
        {
            $this->render("/courses/edit");
        }
    }