<?php

    class CategoriesAdminPage extends BasePage
    {
        public function index()
        {
            $this->render("/admin/categories/index");
        }
    }