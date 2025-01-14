<?php

    class CoursesPage extends BasePage
    {
        public function index()
        {
            $this->render("/courses/index");
        }

        public function show($id)
        {
            $this->render("/courses/show");
        }
    }