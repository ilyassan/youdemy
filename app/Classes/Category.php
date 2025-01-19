<?php
    class Category extends BaseClass {

    private $id;
    private $name;
    private $created_at;

    public function __construct($id, $name, $created_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->created_at = $created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
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

        return new self($result["id"], $result["name"], $result["created_at"]);
    }
    
    public static function all()
    {
        $sql = "SELECT * FROM categories";

        self::$db->query($sql);
    
        $results = self::$db->results();

        $categories = [];
        foreach ($results as $category) {
            $categories[] = new self($category["id"], $category["name"], $category["created_at"]);
        }
    
        return $categories;
    }

    public static function popularCategories()
    {
        $sql = "SELECT ca.name, COUNT(*) as courses_count FROM categories ca
                JOIN courses co ON co.category_id = ca.id
                GROUP BY ca.name
                ORDER BY courses_count DESC
                LIMIT 5";

        self::$db->query($sql);

        $results = self::$db->results();
        return $results;
    }

    public static function getRecentCategories($limit)
    {
        $sql = "SELECT *
                FROM categories
                ORDER BY created_at DESC
                LIMIT :limit";

        self::$db->query($sql);
        self::$db->bind(':limit', $limit);

        $results = self::$db->results();

        $categories = [];
        foreach ($results as $category) {
            $categories[] = new self($category["id"], $category["name"], $category["created_at"]);
        }

        return $categories;
    }
}