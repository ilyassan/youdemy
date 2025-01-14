<?php    
    require_once __DIR__ . '/../app/Config/config.php';

    function require_all_files($directory) {
        foreach (glob($directory . '/*.php') as $filename) {
            require_once $filename;
        }
    }

    // Require all core files
    require_all_files(__DIR__ . '/../app/Core');
    $db = new Database();
    BaseClass::setDatabase($db);

    require_all_files(__DIR__ . '/../app/Helpers');

    // Define the routes
    $router = new Router();
    $request = new Request();

    // $router->add('GET', '/', 'HomePage@index', ["visitor", "student"]);
    // $router->add('GET', '/courses', 'CoursesPage@index', ["visitor", "student"]);
    // $router->add('GET', '/courses/content/{id}', 'CourseContentPage@index', ["visitor", "student"]);
    // $router->add('GET', '/courses/{id}', 'CoursesPage@show', ["visitor", "student"]);
    // $router->add('GET', '/my-courses', 'MyCoursesPage@index', ["visitor", "student"]);


    // $router->add('GET', '/courses', 'CoursesTeacherPage@index', ["visitor", "student"]);
    // $router->add('GET', '/courses/create', 'CoursesTeacherPage@create', ["visitor", "student"]);
    // $router->add('GET', '/courses/edit/{id}', 'CoursesTeacherPage@edit', ["visitor", "student"]);
    // $router->add('GET', '/students', 'StudentsTeacherPage@index', ["visitor", "student"]);

    $router->add('GET', '/', 'DashboardAdminPage@index', ["visitor", "student"]);
    $router->add('GET', '/teachers', 'TeachersAdminPage@index', ["visitor", "student"]);
    $router->add('GET', '/students', 'StudentsAdminPage@index', ["visitor", "student"]);
    $router->add('GET', '/banned-students', 'BannedStudentsAdminPage@index', ["visitor", "student"]);
    $router->add('GET', '/unverified-teachers', 'UnverifiedTeachersAdminPage@index', ["visitor", "student"]);
    $router->add('GET', '/categories', 'CategoriesAdminPage@index', ["visitor", "student"]);

    $router->dispatch($request);