<?php

    class CoursesTeacherPage extends BasePage
    {
        public function index()
        {
            $filters['keyword'] = $_GET['keyword'] ?? '';
            $filters['category_id'] = $_GET['category_id'] ?? '';
            $filters['teacher_id'] = user()->getId();

            $coursesTotalCount = Course::countByFilter($filters);
            $courses = Course::all($filters);
            $categories = Category::all();
            
            $this->render("/courses/index", compact('courses', 'categories', 'coursesTotalCount'));
        }

        public function create()
        {
            $categories = Category::all();
            $tags = Tag::all();

            $this->render("/courses/create", compact('categories', 'tags'));
        }

        public function edit($id)
        {
            $this->render("/courses/edit");
        }


        public function store()
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'price' => trim($_POST['price']),
                'category_id' => trim($_POST['category_id']),
                'tag_ids' => $_POST['tag_ids'] ?? [],
                'thumbnail' => $_FILES['thumbnail'],
                'video_content' => $_FILES['video-content'] ?? null,
                'document_content' => $_FILES['document-content'] ?? null,
            ];
        
            $errors = [
                'title_err' => '',
                'description_err' => '',
                'price_err' => '',
                'category_id_err' => '',
                'tag_ids_err' => '',
                'thumbnail_err' => '',
                'content_err' => '',
                'general_err' => '',
            ];
        
            // Validate basic info
            if (empty($data['title'])) {
                $errors['title_err'] = 'Please enter the course title.';
            }
        
            if (empty($data['description'])) {
                $errors['description_err'] = 'Please enter the course description.';
            }
        
            if (empty($data['price'])) {
                $errors['price_err'] = 'Please enter the course price.';
            }
        
            if (empty($data['category_id'])) {
                $errors['category_id_err'] = 'Please select a course category.';
            }
        
            if (empty($data['tag_ids'])) {
                $errors['tag_ids_err'] = 'Please select at least one tag.';
            }
        
            // Handle thumbnail upload
            $thumbnailName = '';
            if (empty($data['thumbnail']['name']) || $data['thumbnail']['size'] == 0) {
                $errors['thumbnail_err'] = 'Course thumbnail is required.';
            } elseif ($data['thumbnail']['error'] === UPLOAD_ERR_OK) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (in_array($data['thumbnail']['type'], $allowedTypes)) {
                    $uploadDir = IMAGESROOT . 'thumbnails/';
                    
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
        
                    $thumbnailName = time() . '_' . basename($data['thumbnail']['name']);
                    $thumbnailPath = $uploadDir . $thumbnailName;
        
                    if (!move_uploaded_file($data['thumbnail']['tmp_name'], $thumbnailPath)) {
                        $errors['thumbnail_err'] = 'Failed to upload the thumbnail.';
                    }
                } else {
                    $errors['thumbnail_err'] = 'Invalid image format. Allowed formats are JPG, PNG, and GIF.';
                }
            }
        
            // Handle course content upload (video or document)
            $contentName = '';
            $contentType = '';

            if (!empty($data['video_content']['name'])) {
                $contentFile = $data['video_content'];
                $allowedTypes = ['video/mp4'];
                $contentType = 'video';
                $uploadDir = VIDEOSROOT;
            } elseif (!empty($data['document_content']['name'])) {
                $contentFile = $data['document_content'];
                $allowedTypes = ['application/pdf'];
                $contentType = 'document';
                $uploadDir = PDFSROOT;
            } else {
                $errors['content_err'] = 'Please upload either a video or document.';
            }
        
            // Process content upload if file was provided
            if (isset($contentFile) && $contentFile['error'] === UPLOAD_ERR_OK) {
                if (in_array($contentFile['type'], $allowedTypes)) {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
        
                    $contentName = time() . '_' . basename($contentFile['name']);
                    $contentPath = $uploadDir . $contentName;
        
                    if (!move_uploaded_file($contentFile['tmp_name'], $contentPath)) {
                        $errors['content_err'] = 'Failed to upload the course content.';
                    }
                } else {
                    $errors['content_err'] = 'Invalid file format.';
                }
            }
        
            // If no errors, save to database
            if (empty(array_filter($errors))) {
                $course = new Course();

                $course->setTitle($data['title']);
                $course->setDescription($data['description']);
                $course->setPrice($data['price']);
                $course->setCategoryId($data['category_id']);
                $course->setTeacherId(user()->getId());
                $course->setThumbnail($thumbnailName);
                if ($contentType == "video") {
                    $course->setVideoName($contentName);
                }else{
                    $course->setDocumentName($contentName);
                }
        
                if ($course->save() && $course->attachTags($data['tag_ids'])) {
                    flash("success", "Course created successfully!");
                    redirect('courses');
                } else {
                    $errors['general_err'] = 'Something went wrong while creating the course.';
                }
            }
        
            flash("error", array_first_not_null_value($errors));
            back();
        }
    }