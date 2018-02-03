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
    private $scheduled;

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
        $this->scheduled = false;
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
        $sql = "SELECT tournament.scheduled,tournament.id, sport.name AS sport, sport.id AS sportId, sport.number_players, partner.name AS partner, partner.id AS partnerId, partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id WHERE tournament.id = ?;";

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

    public static function getAllAdminTournaments()
    {
        $sql = "SELECT tournament.scheduled,sport.name AS sport, sport.number_players, tournament.id, partner.name AS partner,tournament.partner_fk AS partnerId, partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber, teamLeft FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id;";

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

    public static function setScheduled($id)
    {
        $b = false;

        $sql = "UPDATE tournament SET scheduled=1 WHERE id=?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public static function getTournamentForTeam($team)
    {
        $sql = "SELECT tournament.scheduled,tournament.id, sport.name AS sport, sport.id AS sportId, sport.number_players, partner.name AS partner, partner.id AS partnerId, partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id WHERE tournament.id = ?;";

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

    public static function getAllTournamentsAvailableForUser($id)
    {
        $sql = "SELECT sport.name AS sport, sport.number_players, tournament.id, partner.name AS partner,
        partner.region, telnumber, tournament.name AS tournament, endSubscription, startDate, teamNumber, teamLeft 
        FROM (tournament JOIN partner ON partner_fk = partner.id) JOIN sport ON sport_fk = sport.id 
        WHERE endSubscription >= NOW() AND tournament.id NOT IN (SELECT tournament.id FROM tournament JOIN team ON tournament.id = team.tournament_fk WHERE team.user_fk = ?);";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
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

    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO tournament(id, name, partner_fk, startDate, endSubscription, teamNumber, teamLeft, sport_fk, scheduled) 
        VALUES (NULL, ?,?,?,?,?,?,?,?);";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissiiii", $this->name, $this->partner_fk, $this->startDate, $this->endSubscription, $this->teamNumber, $this->teamLeft, $this->sport_fk, $this->scheduled);
        if ($stmt->execute()) $b = true;

        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }
}