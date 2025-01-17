<?php
    class Enrollment extends BaseClass {

    private $id;
    private $student_id;
    private $course_id;

    public function __construct($id = null, $student_id = null, $course_id = null)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->course_id = $course_id;
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

    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    public function setCourseId($course_id)
    {
        $this->course_id = $course_id;
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

    public static function find(int $id) {
        $sql = "SELECT * FROM enrollment
                WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);

        $result = self::$db->single();
        return $result ? new self($result->id, $result->student_id, $result->course_id) : null;
    }
}