<?php

    class BannedStudentsAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/banned-students/index");
        }
    }