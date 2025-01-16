<?php
class Course extends BaseClass {

    private $id;
    private $title;
    private $description;
    private $price;
    private $thumbnail;
    private $document_name;
    private $video_name;
    private $is_deleted;
    private $teacher_id;
    private $category_id;
    private $created_at;
    private $updated_at;
    private $rate;
    private $rates_count;
    private $teacher_name;

    public function __construct($id, $title, $description, $price, $thumbnail, $document_name, $video_name, $is_deleted, $teacher_id, $category_id, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->thumbnail = $thumbnail;
        $this->document_name = $document_name;
        $this->video_name = $video_name;
        $this->is_deleted = $is_deleted;
        $this->teacher_id = $teacher_id;
        $this->category_id = $category_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function getDocumentName()
    {
        return $this->document_name;
    }

    public function getVideoName()
    {
        return $this->video_name;
    }

    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    public function getTeacherId()
    {
        return $this->teacher_id;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getRatesCount()
    {
        return $this->rates_count;
    }

    public function getTeacherName()
    {
        return $this->teacher_name;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function setRatesCount($rates_count)
    {
        $this->rates_count = $rates_count;
    }

    public function setTeacherName($teacher_name)
    {
        $this->teacher_name = $teacher_name;
    }

    // Save a new course to the database
    public function save()
    {
        $sql = "INSERT INTO courses (title, description, price, thumbnail, document_name, video_name, teacher_id, category_id) 
                VALUES (:title, :description, :price, :thumbnail, :document_name, :video_name, :teacher_id, :category_id)";
        self::$db->query($sql);
        self::$db->bind(':title', $this->title);
        self::$db->bind(':description', $this->description);
        self::$db->bind(':price', $this->price);
        self::$db->bind(':thumbnail', $this->thumbnail);
        self::$db->bind(':document_name', $this->document_name);
        self::$db->bind(':video_name', $this->video_name);
        self::$db->bind(':teacher_id', $this->teacher_id);
        self::$db->bind(':category_id', $this->category_id);
        return self::$db->execute();
    }

    // Delete a course from the database
    public function delete()
    {
        $sql = "DELETE FROM courses WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $this->id);
        return self::$db->execute();
    }

    // Find a course by ID
    public static function find(int $id)
    {
        $sql = "SELECT * FROM courses WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);

        $result = self::$db->single();

        return new self(
            $result["id"],
            $result["title"],
            $result["description"],
            $result["price"],
            $result["thumbnail"],
            $result["document_name"],
            $result["video_name"],
            $result["is_deleted"],
            $result["teacher_id"],
            $result["category_id"],
            $result["created_at"],
            $result["updated_at"]
        );
    }

    // Get all courses
    public static function all()
    {
        $sql = "SELECT * FROM courses";
        self::$db->query($sql);
        self::$db->execute();

        $results = self::$db->results();

        $courses = [];
        foreach ($results as $result) {
            $courses[] = new self(
                $result["id"],
                $result["title"],
                $result["description"],
                $result["price"],
                $result["thumbnail"],
                $result["document_name"],
                $result["video_name"],
                $result["is_deleted"],
                $result["teacher_id"],
                $result["category_id"],
                $result["created_at"],
                $result["updated_at"]
            );
        }

        return $courses;
    }

    // Get courses by category ID
    public static function findByCategoryId(int $category_id)
    {
        $sql = "SELECT * FROM courses WHERE category_id = :category_id";
        self::$db->query($sql);
        self::$db->bind(':category_id', $category_id);
        self::$db->execute();

        $results = self::$db->results();

        $courses = [];
        foreach ($results as $result) {
            $courses[] = new self(
                $result["id"],
                $result["title"],
                $result["description"],
                $result["price"],
                $result["thumbnail"],
                $result["document_name"],
                $result["video_name"],
                $result["is_deleted"],
                $result["teacher_id"],
                $result["category_id"],
                $result["created_at"],
                $result["updated_at"]
            );
        }

        return $courses;
    }

    // Get courses by teacher ID
    public static function findByTeacherId(int $teacher_id)
    {
        $sql = "SELECT * FROM courses WHERE teacher_id = :teacher_id";
        self::$db->query($sql);
        self::$db->bind(':teacher_id', $teacher_id);
        self::$db->execute();

        $results = self::$db->results();

        $courses = [];
        foreach ($results as $result) {
            $courses[] = new self(
                $result["id"],
                $result["title"],
                $result["description"],
                $result["price"],
                $result["thumbnail"],
                $result["document_name"],
                $result["video_name"],
                $result["is_deleted"],
                $result["teacher_id"],
                $result["category_id"],
                $result["created_at"],
                $result["updated_at"]
            );
        }

        return $courses;
    }

    // Get Top N courses by enrollments
    public static function topCourses(int $n)
    {
        $sql = "SELECT
                    c.*,
                    COUNT(e.id) AS enrollments_count,
                    COUNT(r.id) AS rates_count,
                    AVG(r.rate) AS rate,
                    CONCAT(u.first_name, ' ', u.last_name) AS teacher_name
                FROM courses c
                LEFT JOIN enrollments e ON c.id = e.course_id
                LEFT JOIN rates r ON c.id = r.course_id
                JOIN users u ON c.teacher_id = u.id
                GROUP BY c.id
                ORDER BY enrollments_count DESC
                LIMIT :n";

        self::$db->query($sql);
        self::$db->bind(':n', $n);
        self::$db->execute();

        $results = self::$db->results();

        $courses = [];
        foreach ($results as $result) {
            $course = new self(
                $result["id"],
                $result["title"],
                $result["description"],
                $result["price"],
                $result["thumbnail"],
                $result["document_name"],
                $result["video_name"],
                $result["is_deleted"],
                $result["teacher_id"],
                $result["category_id"],
                $result["created_at"],
                $result["updated_at"]
            );

            $course->setRate(number_format($result['rate'], 2));
            $course->setRatesCount($result['rates_count']);
            $course->setTeacherName($result['teacher_name']);

            $courses[] = $course;
        }

        return $courses;
    }
}