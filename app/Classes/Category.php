<?php
    class Category extends BaseClass {

    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function save()
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        self::$db->query($sql);
        self::$db->bind(':name', $this->name);
        return self::$db->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $this->id);
        return self::$db->execute();
    }


    public static function find(int $id) {
        $sql = "SELECT * FROM categories
                WHERE id = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);

        $result = self::$db->single();

        return new self($result["id"], $result["name"]);
    }
    
    public static function all()
    {
        $sql = "SELECT * FROM categories";

        self::$db->query($sql);
        self::$db->execute();
    
        $result = self::$db->results();

        $categories = [];
        foreach ($result as $category) {
            $categories[] = new self($category["id"], $category["name"]);
        }
    
        return $categories;
    }

    public static function popularCategories()
    {
        $sql = "SELECT ca.name, COUNT(*) as courses_count FROM categories ca
                JOIN courses co ON co.category_id = ca.id
                GROUP BY ca.name
                ORDER BY courses_count DESC
                LIMIT 4";

        self::$db->query($sql);

        $results = self::$db->results();
        return $results;
    }

}