<?php

    class CoursesTeacherPage extends BasePage
    {
        public function index()
        {
            $this->render("/courses/index");
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