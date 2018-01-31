<?php
require("Database.php");

class Novita
{
    private $id;
    private $title;
    private $date;
    private $text;

    /**
     * Novita constructor.
     * @param $id
     * @param $date
     * @param $title
     * @param $text
     */
    public function __construct($title,$date, $text)
    {
        $this->title = $title;
        $this->date = $date;
        $this->text = $text;
    }

    public static function getAllNews()
    {
        $sql = "SELECT title, date, text FROM novita";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $news = array();

        while ($row = $result->fetch_assoc()) {
            $news[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($news);
    }


    public function insert()
    {
        $sql = "INSERT INTO novita (id, title, date, text) VALUES (NULL,?, ?, ?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss",$this->title, $this->date, $this->text);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }

}