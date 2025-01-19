<?php

    class CourseContentPage extends BasePage
    {
        public function index($id)
        {
            $course = Course::find($id);
            $relatedCourses = Course::limit(4);

            if ($course->getContentType() == "video") {
                $this->render("/course-content/video", compact('course', 'relatedCourses'));
            }else{
                $this->render("/course-content/document", compact('course', 'relatedCourses'));
            }
        }
    }