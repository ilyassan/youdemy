<?php
class Teacher extends User
{
    private $is_verified;

    public function getIsVerified()
    {
        return $this->is_verified;
    }
    
    public function setIsVerified($is_verified)
    {
        $this->is_verified = $is_verified;
    }


    public static function getInscriptionsBetween($startDate, $endDate)
    {
        $sql = "SELECT COUNT(*) as teachers_count
                FROM users
                WHERE role_id = :role_id AND created_at BETWEEN :start_date AND :end_date";
        
        self::$db->query($sql);
        self::$db->bind(':role_id', self::$teacherRoleId);
        self::$db->bind(':start_date', $startDate);
        self::$db->bind(':end_date', $endDate);

        $result = self::$db->single();

        return $result["teachers_count"];
    }

    public static function pendingsCount()
    {
        $sql = "SELECT COUNT(*) as teachers_count
                FROM users
                WHERE role_id = :role_id AND is_verified = 0";

        self::$db->query($sql);
        self::$db->bind(':role_id', self::$teacherRoleId);

        $result = self::$db->single();

        return $result["teachers_count"];
    }

    public static function getRecentVerifications($limit = 5)
    {
        $sql = "SELECT *
                FROM users
                WHERE role_id = :role_id AND is_verified = 0
                ORDER BY created_at DESC
                LIMIT :limit";

        self::$db->query($sql);
        self::$db->bind(':role_id', self::$teacherRoleId);
        self::$db->bind(':limit', $limit);

        $results = self::$db->results();

        $teachers = [];
        foreach ($results as $teacher) {
            $teachers[] = new self($teacher["id"], $teacher["first_name"], $teacher["last_name"], $teacher["email"], $teacher["password"], $teacher["role_id"], $teacher["created_at"]);
        }

        return $teachers;
    }
}