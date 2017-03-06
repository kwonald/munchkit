<!-- <?php
$servername = "mk-db.ctleukvi2d3k.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "redRider555!";
$dbName = "mkdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?> -->
<?php

class munchKitDB extends mysqli {

    // single instance of self shared among all instances
    private static $instance = null;
    // db connection config vars
    private $user = "admin";
    private $pass = "redRider555!";
    private $dbName = "mkdb";
    private $dbHost = "mk-db.ctleukvi2d3k.us-west-2.rds.amazonaws.com";
    private $con = null;

    //This method must be static, and must return an instance of the object if the object
    //does not already exist.
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    // private constructor
    private function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }

    public function get_user_id_by_email($email) {
        $email = $this->real_escape_string($email);
        $user = $this->query("SELECT idUsers FROM Users WHERE email = '"
                        . $email . "'");

        if ($user->num_rows > 0){
            $row = $user->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_child_by_user_id($userID) {
        return $this->query("SELECT idMunchKids, f_name, dietType FROM MunchKids WHERE Users_idUsers=" . $userID);
    }

    public function create_user($email, $password) {
        $email = $this->real_escape_string($email);
        $password = $this->real_escape_string($password);
        $this->query("INSERT INTO Users (email, passwordSalt) VALUES ('" . $email
                . "', '" . $password . "')");
    }

    public function verify_user_credentials($email, $password) {
        $email = $this->real_escape_string($email);
        $password = $this->real_escape_string($password);
        $result = $this->query("SELECT 1 FROM wishers WHERE email = '"
                        . $email . "' AND passwordSalt = '" . $password . "'");
        return $result->data_seek(0);
    }

    function insert_child($userID, $f_name, $dietType) {
        $f_name = $this->real_escape_string($f_name);
        if ($this->real_escape_string($dietType)==null){
           $this->query("INSERT INTO MunchKids (Users_idUsers, f_name)" .
                " VALUES (" . $userID . ", '" . $f_name . "', 'original')");
        } else
        $this->query("INSERT INTO MunchKids (Users_idUsers, f_name, dietType)" .
                " VALUES (" . $userID . ", '" . $f_name . "', "
                . $this->real_escape_string($dietType) . ")");
    }
    
    function format_date_for_sql($date) {
        if ($date == "")
            return null;
        else {
            $dateParts = date_parse($date);
            return $dateParts['year'] * 10000 + $dateParts['month'] * 100 + $dateParts['day'];
        }
    }

    public function update_munchkids($idMunchKids, $f_name, $dietType) {
        $f_name = $this->real_escape_string($f_name);
        $this->query("UPDATE MunchKids SET f_name = '" . $f_name .
                "', dietType = " . $this->real_escape_string($dietType)
                . " WHERE idMunchKids =" . $idMunchKids);
    }

    public function get_munchkid_by_munchkid_id($idMunchKids) {
        return $this->query("SELECT idMunchKids, f_name, dietType FROM MunchKids WHERE idMunchKids = " . $idMunchKids);
    }

    public function delete_wish($idMunchKids) {
        $this->query("DELETE FROM MunchKids WHERE idMunchKids = " . $idMunchKids);
    }

}

?>