<?php
    class Enrollment extends BaseClass {

    private $id;
    private $student_id;
    private $course_id;
    private $is_completed;

    public function __construct($id = null, $student_id = null, $course_id = null, $is_completed = null)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->course_id = $course_id;
        $this->is_completed = $is_completed;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getStudentId()
    {
        return $this->student_id;
    }

    public function getCourseId()
    {
        return $this->course_id;
    }

    public function getIsCompleted()
    {
        return $this->is_completed;
    }

    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    public function setCourseId($course_id)
    {
        $this->course_id = $course_id;
    }

    public function setIsCompleted($is_completed)
    {
        $this->is_completed = $is_completed;
    }


    public function save()
    {
        $sql = "INSERT INTO enrollments (student_id, course_id) 
                VALUES (:student_id, :course_id)";

        self::$db->query($sql);
        self::$db->bind(':student_id', $this->student_id);
        self::$db->bind(':course_id', $this->course_id);

        return self::$db->execute();
    }

    public function update()
    {
        $sql = "UPDATE enrollments
                SET is_completed = :is_completed
                WHERE id = :id";

        self::$db->query($sql);
        self::$db->bind(':is_completed', $this->is_completed);
        self::$db->bind(':id', $this->id);

        return self::$db->execute();
    }

    public static function find(int $student_id, int $course_id) {
        $sql = "SELECT * FROM enrollments
                WHERE student_id = :student_id AND course_id = :course_id";
        self::$db->query($sql);
        self::$db->bind(':student_id', $student_id);
        self::$db->bind(':course_id', $course_id);

        $result = self::$db->single();
        return $result ? new self($result["id"], $result["student_id"], $result["course_id"]) : null;
    }
}