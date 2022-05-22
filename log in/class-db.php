<?php
class DB
{
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "test";

    public function __construct()
    {
        if (!isset($this->db)) {
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if ($conn->connect_error) {
                die("Failed to connect with MySQL: " . $conn->connect_error);
            } else {
                $this->db = $conn;
            }
        }
    }

    public function get_user($id)
    {
        $sql = $this->db->query("SELECT * FROM users WHERE google_uid = '$id'");
        return $sql->fetch_assoc();
    }

    public function upsert_user($arr_data = array())
    {
        $uid = $arr_data['sub'];
        $name = $arr_data['name'];
        $email = $arr_data['email'];
        $picture = $arr_data['picture'];

        // check if user exists by fetching it's details
        $user = $this->get_user($uid);

        if (!$user) {
            // insert the user
            $this->db->query("INSERT INTO users(google_uid, name, email, picture) VALUES('$uid', '$name', '$email', '$picture')");
        } else {
            // update the user
            $this->db->query("UPDATE users SET name = '$name', email = '$email', picture = '$picture' WHERE google_uid = '$uid'");
        }
    }
}