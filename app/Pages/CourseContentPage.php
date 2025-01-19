<?php

    class CourseContentPage extends BasePage
    {
        public function index($id)
        {
            $course = Course::find($id);
            $relatedCourses = Course::limit(4);

            $this->render("/course-content/" . $course->getContentType(), compact('course', 'relatedCourses'));
        }
    }