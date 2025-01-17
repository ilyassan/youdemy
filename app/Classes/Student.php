<?php
class Student extends User
{
    private $is_banned;


    public function getIsBanned()
    {
        return $this->is_banned;
    }
    
    public function setIsBanned($is_banned)
    {
        $this->is_banned = $is_banned;
    }

    public static function studentsCountOfTeacher($teacherId)
    {
        $sql = "SELECT COUNT(*) as count
                FROM users u
                JOIN enrollments en ON en.student_id = u.id
                JOIN courses c ON c.id = en.course_id
                WHERE c.teacher_id = :teacher_id";

        self::$db->query($sql);
        self::$db->bind(':teacher_id', $teacherId);

        $result = self::$db->single();

        return $result["count"];
    }
}