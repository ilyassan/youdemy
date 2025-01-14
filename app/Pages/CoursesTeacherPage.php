<?php

    class CoursesTeacherPage extends BasePage
    {
        public function index()
        {
            $this->render("/teacher/courses/index");
        }

        public function create()
        {
            $this->render("/teacher/courses/create");
        }

        public function edit($id)
        {
            $this->render("/teacher/courses/edit");
        }
    }