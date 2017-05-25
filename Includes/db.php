<?php
class munchKitDB extends mysqli {
    // single instance of self shared among all instances
    private static $instance = null;
    // db connection config vars
    // private $user = "root";
    // private $pass = "nrgfoods22!";
    private $user = "nrgfoods";
    private $pass = "redRider555!";
    private $dbName = "mkdb";
    private $dbHost = "107.178.217.166";
    private $con = null;
    private $passphrase = "startupweekend";

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
    public function __construct() {
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

    public function get_user_name_by_email($email) {
        $email = $this->real_escape_string($email);
        $user = $this->query("SELECT f_name FROM Users WHERE email = '"
                        . $email . "'");

        if ($user->num_rows > 0){
            $row = $user->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_munchkids_by_user_email($email) {
        $userID = $this->get_user_id_by_email($email);
        $result = $this->query("SELECT idMunchKids, f_name, dietType, allergies, suspend FROM MunchKids WHERE Users_idUsers=" . $userID);
        if($result->num_rows == 0){
            return null;
        }
        return $result;
    }

    public function get_munchkid_id($userID, $f_name) {
        $userID = $this->real_escape_string($userID);
        $f_name = $this->real_escape_string($f_name);
        $res = $this->query("SELECT idMunchKids FROM MunchKids WHERE Users_idUsers=" . $userID . " AND f_name = '" . $f_name . "'");
        

        if ($res->num_rows > 0){
            $row = $res->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_orderList_by_user_email($email){
        $userID = $this->get_user_id_by_email($email);
        $result = $this->query("SELECT munchkids.idMunchKids, munchkids.f_name, munchkids.dietType, munchkids.allergies, orders.mealPlan FROM MunchKids INNER JOIN Users ON munchkids.Users_idUsers = users.idUsers INNER JOIN Orders ON munchkids.idMunchKids = orders.MunchKids_idMunchKid WHERE users.idUsers = " . $userID);
        return $result;
    }

    public function get_user_by_email($email) {
        $userID = $this->get_user_id_by_email($email);
        $result = $this->query("SELECT f_name, l_name, phone, addr, city, state, zipCode, email FROM Users WHERE idUsers=" . $userID);
        return $result;
    }

    public function get_order_by_idMunchKid($idMunchKid) {
        $idMunchKid = $this->real_escape_string($idMunchKid);
        $res = $this->query("SELECT mealPlan FROM Orders WHERE MunchKids_idMunchKid = '"
                        . $idMunchKid . "'");

        if ($res->num_rows > 0){
            $row = $res->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_order_dateRequired_by_idMunchKid($idMunchKid) {
        $idMunchKid = $this->real_escape_string($idMunchKid);
        $res = $this->query("SELECT dateRequired FROM Orders WHERE MunchKids_idMunchKid = '"
                        . $idMunchKid . "'");

        if ($res->num_rows > 0){
            $row = $res->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_ingredient_id($allergy){
        $allergy = $this->real_escape_string($allergy);
        $res = $this->query("SELECT idIngredients FROM ingredients WHERE name = '" . $allergy ."'");
        if ($res->num_rows > 0){
            $row = $res->fetch_row();
            return $row[0];
        } else
            return null;
    }

    // This creates a user where they provide a password. Can be done through sign up page via log in or sign up buttong
    public function create_user($email, $passwordHash, $f_name, $l_name, $phoneNo, $addr, $city, $state, $zipCode) {
        $email = $this->real_escape_string($email);
        $passwordHash = $this->real_escape_string($passwordHash);
        $f_name = $this->real_escape_string($f_name);
        $l_name = $this->real_escape_string($l_name);
        $phoneNo = $this->real_escape_string($phoneNo);
        $addr = $this->real_escape_string($addr);
        $city = $this->real_escape_string($city);
        $state = $this->real_escape_string($state);
        $zipCode = $this->real_escape_string($zipCode);
        $date_Joined = $this->get_current_date();
        $last_logged_in = $this->get_current_date();

        $passwordHash = password_hash($passwordHash, PASSWORD_BCRYPT);

        $this->query("INSERT INTO Users (email, passwordHash, f_name, l_name, phone, addr, city, state, zipCode, date_Joined, last_Logged_in) VALUES ('" . $email
                . "', '" . $passwordHash . "', '". $f_name . "', '" . $l_name . "', '" . $phoneNo . "', '" . $addr . "', '" . $city . "', '" . $state . "', '" . $zipCode . "', '" . $date_Joined . "', '". $last_logged_in . "')");
    }


    public function verify_user_credentials($email, $password) {
        $email = $this->real_escape_string($email);
        $password = $this->real_escape_string($password);
        //$passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $secret = $this->get_passwordHash_by_email($email);
          
        return password_verify($password, $secret);
        
        // $result = $this->query("SELECT 1 FROM Users WHERE email = '"
        //                 . $email . "' AND passwordHash = '" . $password . "'");
        // return $result->data_seek(0);
    }

    public function insert_munchkid($userID, $f_name, $dietType, $allergies, $notes) {
        $userID = $this->real_escape_string($userID);
        $f_name = $this->real_escape_string($f_name);
        $dietType = $this->real_escape_string($dietType);
        $allergies = $this->real_escape_string($allergies);
        $notes = $this->real_escape_string($notes);
        
        $this->query("INSERT INTO MunchKids (Users_idUsers, f_name, dietType, allergies, notes)" .
                " VALUES (" . $userID . ", '" . $f_name . "', '"
                . $dietType . "', '". $allergies . "', '". $notes . "')");
    }

    // public function insert_allergies($userID ,$idMunchKid, $allergy) {
    //     $userID = $this->real_escape_string($userID);
    //     $idMunchKid = $this->real_escape_string($idMunchKid);
    //     $allergy = $this->real_escape_string($allergy);
    //     $idIngredient = $this->get_ingredient_id($allergy);
        
    //     $this->query("INSERT INTO allergies (Ingredients_idIngredients, MunchKids_idMunchKids1, MunchKids_Users_idUsers)" .
    //             " VALUES (" . $idIngredient . ", " . $idMunchKid . ", "
    //             . $userID . ")");
    // }

    public function insert_order($idMunchKid, $mealPlan) {
        $idMunchKid = $this->real_escape_string($idMunchKid);
        $mealPlan = $this->real_escape_string($mealPlan);
        $today = $this->get_current_date();
        $nextDelivery = $this->get_next_delivery_date();
        $this->query("INSERT INTO Orders (MunchKids_idMunchKid, mealPlan, dateOrdered, dateRequired)" .
                " VALUES ('" . $idMunchKid . "', '" . $mealPlan . "', '" . $today . "', '" . $nextDelivery . "')");
    }
    
    function format_date_for_sql($date) {
        if ($date == "")
            return null;
        else {
            $dateParts = date_parse($date);
            return $dateParts['year'] * 10000 + $dateParts['month'] * 100 + $dateParts['day'];
        }
    }
    public function update_user($userID, $f_name, $l_name, $phoneNo, $addr, $city, $state, $zipCode) {
        $userID = $this->real_escape_string($userID);
        $f_name = $this->real_escape_string($f_name);
        $l_name = $this->real_escape_string($l_name);
        $phoneNo = $this->real_escape_string($phoneNo);
        $addr = $this->real_escape_string($addr);
        $city = $this->real_escape_string($city);
        $state = $this->real_escape_string($state);
        $zipCode = $this->real_escape_string($zipCode);
        $this->query("UPDATE Users SET f_name = '" . $f_name .
                "', l_name = '" . $l_name .
                "', phone ='" . $phoneNo . "', addr = '" . $addr . "', city = '" . $city . "', state = '" . $state . "', zipCode ='" . $zipCode .
                "' WHERE idUsers =" . $userID);
    }


    public function update_munchkids($idMunchKids, $f_name, $dietType, $allergies) {
        // update f_name, dietType, 
        $idMunchKids = $this->real_escape_string($idMunchKids);
        $f_name = $this->real_escape_string($f_name);
        $dietType = $this->real_escape_string($dietType);
        $allergies = $this->real_escape_string($allergies);
        $this->query("UPDATE MunchKids SET f_name = '" . $f_name .
                "', dietType = '" . $this->real_escape_string($dietType)
                . "', allergies = '" . $allergies . "' WHERE idMunchKids =" . $idMunchKids);
    }

    public function update_order($idMunchKids, $mealPlan) {
        $idMunchKids = $this->real_escape_string($idMunchKids);
        $mealPlan = $this->real_escape_string($mealPlan);
        $today = $this->get_current_date();
        $nextDelivery = $this->get_next_delivery_date();
        $this->query("UPDATE Orders SET mealPlan = '" . $mealPlan . "', dateOrdered = '" . $today . "', dateRequired ='". $nextDelivery ."' WHERE MunchKids_idMunchKid ='" . $idMunchKids."'");
    }

    public function suspend_order($idMunchKids, $lengthOfSuspension) {
        $idMunchKids = $this->real_escape_string($idMunchKids);
        $endOfSuspendDate = $this->get_suspend_until_date($lengthOfSuspension);
        
        $this->query("UPDATE MunchKids SET suspend = '" . TRUE . "' WHERE idMunchKids ='" . $idMunchKids."'");
        $this->query("UPDATE Orders SET dateRequired = '". $endOfSuspendDate ."' WHERE MunchKids_idMunchKid ='" . $idMunchKids."'");
    }

    public function resume_order($idMunchKids) {
        $idMunchKids = $this->real_escape_string($idMunchKids);
        $endOfSuspendDate = $this->get_suspend_until_date(0);
        $this->query("UPDATE MunchKids SET suspend = '" . FALSE . "' WHERE idMunchKids ='" . $idMunchKids."'");
        $this->query("UPDATE Orders SET dateRequired = '". $endOfSuspendDate ."' WHERE MunchKids_idMunchKid ='" . $idMunchKids."'");
    }

    public function get_munchkid_by_munchkid_id($idMunchKids) {
        return $this->query("SELECT idMunchKids, f_name, dietType FROM MunchKids WHERE idMunchKids = " . $idMunchKids);
    }

    public function delete_munchkid($idMunchKids) {
        $this->query("DELETE FROM MunchKids WHERE idMunchKids = " . $idMunchKids);
    }

    public function get_passwordHash_by_email($email) {
        $email = $this->real_escape_string($email);
        $auth = $this->query("SELECT passwordHash FROM Users WHERE email = '"
                        . $email . "'");

        if ($auth->num_rows > 0){
            $row = $auth->fetch_row();
            return $row[0];
        } else
            return null;
    }

    public function get_current_date(){
        date_default_timezone_set('America/Los_Angeles');
        $date = date('Y-m-d G:i:s');
        return $date;
    }

    public function get_next_delivery_date(){
        date_default_timezone_set('America/Los_Angeles');
        return date('Y-m-d', strtotime('next Sunday'));
    }

    //Suspending of meals for x number of weeks must be done before Thursday midnight (23:59:59)
    //Otherwise, the meals will be delivered that coming week and suspended for the week after that. 
    public function get_suspend_until_date($numWeeksToSuspend){
        date_default_timezone_set('America/Los_Angeles');
        $date = strtotime(date('Y-m-d G:i:s'));
        $thursday = strtotime(date('Y-m-d', strtotime('next Thursday')));
        if($thursday - $date >= 7){
            $numWeeksToSuspend += 1; 
        }

        return date('Y-m-d', strtotime('+'.$numWeeksToSuspend.' Sunday'));
        
    }


    // ************ FOR PRE LAUNCH **************//
    public function insert_prelaunch_data($email, $neighbourhood, $numKids, $ages, $reason, $referralSource) {
        $email = $this->real_escape_string($email);
        $neighbourhood = $this->real_escape_string($neighbourhood);
        $ages = $this->real_escape_string($ages);
        $reason = $this->real_escape_string($reason);
        $referralSource = $this->real_escape_string($referralSource);
        
        $this->query("INSERT INTO PreLaunch (email, neighbourhood, numKids, ages, reason, referralSource)" .
                " VALUES ('" . $email . "', '" . $neighbourhood . "', "
                . $numKids . ", '". $ages . "', '". $reason . "', '". $referralSource . "')");
    }


    //  *********** END OF PRE LAUNCH *************//


}

?>