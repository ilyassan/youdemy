<?php

    class CoursesTeacherPage extends BasePage
    {
        public function index()
        {
            $this->render("/teacher/index");
        }

        public function create()
        {
            $this->render("/teacher/courses/create");
        }
    }