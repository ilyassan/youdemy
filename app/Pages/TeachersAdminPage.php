<?php
    class TeachersAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/teachers/index");
        }
    }