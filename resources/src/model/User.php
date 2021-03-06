<?php
require_once(dirname(__FILE__, 3) . '/libs/Mailer/PHPMailer.php');
require_once(dirname(__FILE__, 3) . '/libs/Mailer/Exception.php');
require_once(dirname(__FILE__, 3) . '/libs/Mailer/SMTP.php');

require_once("Database.php");

class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $telnumber;
    private $birthdate;
    private $created_at;
    private $active;
    private $gender;
    private $admin;
    private $parnter_fk;


    public function __construct()
    {
    }

    public static function activateUser($id)
    {
        $b = false;
        $sql = "UPDATE user SET active = 1 WHERE id=?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public static function changePassword($id, $old_pass, $new_pass)
    {
        $b = false;
        $sql = "UPDATE user SET password = ? WHERE id=? AND password = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $new_pass, $id, $old_pass);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public static function getAllAvailableUser()
    {
        $sql = "SELECT id,firstName, lastName, email FROM user WHERE partner_fk IS NULL;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $users = array();

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($users);
    }

    public static function getFavouriteStats($id)
    {
        $sql = "SELECT
              count(*)     AS count,
              sport.name   AS favSport,
              partner.name AS favPartner
            FROM (((user
              JOIN booking b ON user.id = b.user_fk)
              JOIN field ON b.field_fk = field.id)
              JOIN sport ON sport.id = field.sport_fk)
              JOIN partner ON field.partner_fk = partner.id
            WHERE b.user_fk = ? AND b.valid = 1 AND b.approved = 1 AND b.date < NOW()
            GROUP BY sport.id, partner.id
            ORDER BY count DESC
            LIMIT 1;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        Database::closeConnestion($conn);
        return json_encode($result->fetch_assoc());
    }

    public static function getFavouriteDay($id)
    {
        $sql = "SELECT
              count(*) AS count,
              WEEKDAY(b.date) AS day
            FROM (user
              JOIN booking b ON user.id = b.user_fk)
            WHERE b.user_fk = ? AND b.valid = 1 AND b.approved = 1 AND b.date < NOW()
            GROUP BY WEEKDAY(b.date)
            ORDER BY count DESC
            LIMIT 1;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        Database::closeConnestion($conn);

        $result = $result->fetch_assoc();
        $days = array('Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica');
        return $days[$result['day']];
    }

    public static function getLastBookingDateDiff($id)
    {

        $sql = "SELECT DATEDIFF(NOW(), MAX(date)) AS day  
                FROM (user
                  JOIN booking b ON user.id = b.user_fk)
                WHERE b.user_fk = ? AND b.valid = 1 AND b.approved = 1 AND b.date < NOW()
                ORDER BY b.date DESC
                LIMIT 1;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        Database::closeConnestion($conn);
        $result = $result->fetch_assoc();
        return $result['day'];
    }

    public static function getCaptainNumber($id)
    {
        $sql = "SELECT
              count(*) AS count,
              team.name
            FROM user
              JOIN team ON team.user_fk = user.id
            WHERE user.id = ?
            GROUP BY team.user_fk
            ORDER BY COUNT DESC
            LIMIT 1;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        Database::closeConnestion($conn);
        return $result->fetch_assoc()['count'];
    }

    public static function setModerator($user, $partner)
    {
        $b = false;
        $sql = "UPDATE user SET partner_fk = ? WHERE id=?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $partner, $user);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }


    function toString()
    {
        return ("User's data : " . $this->firstName . " " . $this->lastName);
    }

    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function isAdmin()
    {
        return $this->admin;
    }

    public function isModerator()
    {
        if ($this->parnter_fk != null)
            return true;
        else return false;
    }

    public function getPartner()
    {
        return $this->parnter_fk;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function insert($email, $password, $firstName, $lastName, $birthdate, $gender, $tel)
    {
        $sql = "INSERT INTO user (id, email, password, firstName, lastName, birthdate, gender, telnumber, created_at) VALUES (NULL, ?, ?, ?, ?, ?, ?,?, NOW());";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $email, $password, $firstName, $lastName, $birthdate, $gender, $tel);
        $stmt->execute();
        $id = $conn->insert_id;
        $stmt->close();
        Database::closeConnestion($conn);

        $this->setId($id);
//        return $this->loadByID($id);
    }


    public static function withID($id)
    {
        $instance = new self();
        $instance->loadByID($id);
        return $instance;
    }

    public static function withEmailAndPassoword($email, $password)
    {
        $instance = new self();
        $instance->loadByEmailAndPassword($email, $password);
        return $instance;
    }

    public static function withRow(array $row)
    {
        $instance = new self();
        $instance->fill($row);
        return $instance;
    }

    public static function signUp($email, $password, $firstName, $lastName, $birthdate, $gender, $tel)
    {
        $instance = new self();
        $instance->insert($email, $password, $firstName, $lastName, $birthdate, $gender, $tel);
        $instance->loadByID($instance->getId());
        // Send confirmation email.
        $instance->sendConfirmationEmail();
        return $instance;
    }

    public static function isEmailAvailable($email)
    {
        $sql = "SELECT COUNT(*) AS count FROM user WHERE user.email = ? GROUP BY user.email;";
        $conn = Database::getConnection();
        // prepare and bind

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $count = 0;

        while ($row = $result->fetch_assoc()) {
            $count = $row['count'];
        }
        $stmt->close();
        Database::closeConnestion($conn);

        if ($count == 0) {
            return true;
        } else return false;
    }

    protected function loadByID($id)
    {
        $row = $this->get_user_from_id($id);
        $this->fill($row);
    }

    protected function loadByEmailAndPassword($email, $password)
    {
        $row = $this->get_user_from_email_password($email, $password);
        if ($row == null) return;
        $this->fill($row);
    }

    protected function fill(array $row)
    {
        $this->id = $row['id'];
        $this->firstName = $row['firstName'];
        $this->lastName = $row['lastName'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->gender = $row['gender'];
        $this->telnumber = $row['telnumber'];
        $this->birthdate = $row['birthdate'];
        $this->created_at = $row['created_at'];
        $this->active = $row['active'];
        $this->admin = $row['admin'];
        $this->parnter_fk = $row['partner_fk'];
    }

    function get_user_from_id($id)
    {
        $sql = "SELECT * FROM user WHERE user.id = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        Database::closeConnestion($conn);
        return $result->fetch_assoc();
    }

    function get_user_from_email_password($email, $password)
    {

        $sql = "SELECT * FROM user WHERE user.email = ? AND user.password = ? AND user.active = 1;";
        $conn = Database::getConnection();
        // prepare and bind

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        if (!$stmt->execute()) echo "error";
        $result = $stmt->get_result();

//        while ($row = $result->fetch_assoc()) {
//            // do something with $row
//        }

        $stmt->close();
        Database::closeConnestion($conn);

        return $result->fetch_assoc();
    }

    public function to_json()
    {
        if ($this->birthdate != null) {
            $date = new DateTime($this->birthdate);
            $this->birthdate = $date->format('d-m-Y');
        }

        if ($this->created_at != null) {
            $date = new DateTime($this->created_at);
            $this->created_at = $date->format('d-m-Y');
        }

        return json_encode(array(
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'telnumber' => $this->telnumber,
            'birthdate' => $this->birthdate,
            'created_at' => $this->created_at,
            'active' => $this->active,
            'gender' => $this->gender,
            'admin' => $this->admin
        ));
    }

    public function sendConfirmationEmail()
    {
        $message = $this->formatMessage($this->firstName, $this->id);
        $subject = "Conferma registrazione";

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = '@gmail.com';                 // SMTP username
            $mail->Password = '';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

//            echo "L'email : " . $this->email;
//            echo "";
            //Recipients
            $mail->setFrom('progettotdw@gmail.com', 'Mailer');
            $mail->addAddress('' . $this->email);     // Add a recipient

            $mail->addReplyTo('progettotdw@gmail.com');


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = $message;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }


    function formatMessage($firstName, $id)
    {
        $message = "Ciao " . $firstName . ",<br/><br />Benvenuto su PrenotaIlTuoCampo!<br/> " .
            "Per completare la tua registrazione clicca semplicemente sul seguente link:<br/>" .
            "<a href='http://www.localhost/PrenotaIlTuoCampo/verifyAccount.php?token=" . $id . "'>Clicca qui per attivare!</a>" .
            "<br/><br/>Grazie!";
        return $message;
    }


}