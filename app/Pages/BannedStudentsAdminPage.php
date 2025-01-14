<?php

    class BannedStudentsAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/banned-students/index");
        }
    }