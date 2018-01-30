<?php
require_once('Database.php');

class Tournament
{
    private $name;
    private $partner_fk;
    private $startDate;
    private $endSubscription;
    private $teamNumber;
    private $teamLeft;
    private $sport_fk;

    /**
     * Tournament constructor.
     * @param $name
     * @param $partner_fk
     * @param $startDate
     * @param $endSubscription
     * @param $teamNumber
     * @param $teamLeft
     * @param $sport_fk
     */
    public function __construct($name, $partner_fk, $startDate, $endSubscription, $teamNumber, $teamLeft, $sport_fk)
    {
        $this->name = $name;
        $this->partner_fk = $partner_fk;
        $this->startDate = $startDate;
        $this->endSubscription = $endSubscription;
        $this->teamNumber = $teamNumber;
        $this->teamLeft = $teamLeft;
        $this->sport_fk = $sport_fk;
    }


    public static function getAllTournaments()
    {
        $sql = "SELECT sport.name AS sport, sport.number_players, tournament.id, partner.name AS partner, partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id WHERE endSubscription >= NOW();";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $tournaments = array();

        while ($row = $result->fetch_assoc()) {
            $tournaments[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($tournaments);
    }

    public static function getInfoForTournament($id)
    {
        $sql = "SELECT sport.name AS sport, sport.number_players, partner.name AS partner, partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id WHERE tournament.id = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $tournament = $result->fetch_assoc();
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($tournament);
    }
}