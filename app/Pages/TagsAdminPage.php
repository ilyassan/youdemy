<?php

    class TagsAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/tags/index");
        }
    }