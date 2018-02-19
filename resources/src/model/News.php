<?php
require("Database.php");

class News
{
    private $id;
    private $title;
    private $date;
    private $text;
    private $user_fk;

    /**
     * News constructor.
     * @param $title
     * @param $date
     * @param $text
     * @param $user_fk
     */
    public function __construct($title, $date, $text, $user_fk)
    {
        $this->title = $title;
        $this->date = $date;
        $this->text = $text;
        $this->user_fk = $user_fk;
    }


    public static function getAllNews()
    {
        $sql = "SELECT title, date, text FROM `news` ORDER BY date DESC;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $news = array();
        while ($row = $result->fetch_assoc()) {
            $date = new DateTime($row['date']);
            $row['date'] = $date->format('d-m-Y');
            $news[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($news);
    }


    public function insert()
    {
        $sql = "INSERT INTO `news` (id, title, date, text, user_fk) VALUES (NULL,?, ?, ?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $this->title, $this->date, $this->text, $this->user_fk);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }

}