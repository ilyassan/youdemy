<?php
    class Rate extends BaseClass {

    private $id;
    private $rate;
    private $student_id;
    private $course_id;

    public function __construct($id, $rate, $student_id, $course_id)
    {
        $this->id = $id;
        $this->rate = $rate;
        $this->student_id = $student_id;
        $this->course_id = $course_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getStudentId()
    {
        return $this->student_id;
    }

    public function getCourseId()
    {
        return $this->course_id;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }


    public function save()
    {
        $sql = "INSERT INTO rates (rate, student_id, course_id) 
                VALUES (:rate, :student_id, :course_id)";

        self::$db->query($sql);
        self::$db->bind(':rate', $this->rate);
        self::$db->bind(':student_id', $this->student_id);
        self::$db->bind(':course_id', $this->course_id);

        return self::$db->execute();
    }

    public function update()
    {
        $sql = "UPDATE rates
                SET rate = :rate
                WHERE id = :id";

        self::$db->query($sql);
        self::$db->bind(':rate', $this->rate);
        self::$db->bind(':id', $this->id);
        self::$db->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM rates
                WHERE id = :id";

        self::$db->query($sql);
        self::$db->bind(':id', $this->id);
        
        return self::$db->execute();
    }


    public static function getRateOfStudent($student_id, $course_id)
    {
        $sql = "SELECT * FROM rates
                WHERE student_id = :student_id AND course_id = :course_id";

        self::$db->query($sql);
        self::$db->bind(':student_id', $student_id);
        self::$db->bind(':course_id', $course_id);

        $result = self::$db->single();
        return $result ? new self($result["id"], $result["rate"], $result["student_id"], $result["course_id"]) : null;
    }

    public static function find(int $id) {
        $sql = "SELECT * FROM rates
                WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);
        self::$db->execute();

        $result = self::$db->single();
        return $result ? new self($result->id, $result->rate, $result->student_id, $result->course_id) : null;
    }

    public static function getRecentRates($limit)
    {
        $sql = "SELECT r.*, v.name as vehicle_name
                FROM rates r
                JOIN vehicles v ON r.course_id = v.id
                ORDER BY r.created_at DESC
                LIMIT :limit";

        self::$db->query($sql);
        self::$db->bind(':limit', $limit);

        $results = self::$db->results();

        return $results;
    }

    public static function avg()
    {
        $sql = "SELECT AVG(rate) as avg_rate FROM rates";
        self::$db->query($sql);
        self::$db->execute();

        $result = self::$db->single();
        return $result->avg_rate;
    }

}