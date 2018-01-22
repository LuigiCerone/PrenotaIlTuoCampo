<?php
require("Database.php");

class Review
{
    private $id;
    private $userId_fk;
    private $text;
    private $stars;
    private $approved;

    /**
     * Review constructor.
     * @param $id
     * @param $userId_fk
     * @param $text
     * @param $stars
     * @param $approved
     */
    public function __construct($userId_fk, $text, $stars)
    {
        $this->userId_fk = $userId_fk;
        $this->text = $text;
        $this->stars = $stars;
        $this->approved = false;
    }

    public static function getAllReviews()
    {
        $sql = "SELECT text, stars, approved, firstName FROM review JOIN user ON userId_fk = user.id WHERE approved = 1";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $reviews = array();

        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($reviews);
    }

    public function insert()
    {
        $sql = "INSERT INTO review (id, userId_fk, text, stars, approved) VALUES (null, ?, ?, ?, FALSE);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isi", $this->userId_fk, $this->text, $this->stars);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }
}