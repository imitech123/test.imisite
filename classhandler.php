<?php
session_start();
class DB
{
    const HOSTNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DBNAME = 'test.imi';

    private $host_name;
    private $user_name;
    private $password;
    private $db_name;
    protected $connection;
    private $conn = false;
    function __construct()
    {
        $this->host_name = self::HOSTNAME;
        $this->user_name = self::USERNAME;
        $this->password = self::PASSWORD;
        $this->db_name = self::DBNAME;

        if (!$this->conn) {
            $this->connection = new mysqli($this->host_name, $this->user_name, $this->password, $this->db_name);
            $this->conn = true;

            if ($this->connection->connect_error) {
                die($this->connection->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }
    public function BaseUrl()
    {
        'http://localhost/myproject/IMITechnology/';
    }
}
class Admin extends DB
{
    public function Login($username, $pass , $token,$remberme)
    {
        if (empty($username) && empty($pass)) {
            return ['status' => false, 'error' => 'Credential error Input filed is Blank'];
        } else if (!$this->valid_email($username)) {

            return ['status' => false, 'error' => 'This email address not be valid'];
        } else if (!$this->valid_pass($pass)) {
            return ['status' => false, 'error' => 'Enter The Password must be 8 characters long'];
        } else {
            $query = $this->connection->query("SELECT email,password,role FROM `users` WHERE email= '$username' limit 1");
            if ($query->num_rows > 0) {
                $row = $query->fetch_object();
                if($remberme)
                {
                    setcookie('email',$username,time()+60*60*24);
                    setcookie('pasword',$pass,time()+60*60*24);
                }else
                {
                    setcookie('email',$username,60*60);
                    setcookie('pasword',$pass,60*60);
                }
                if (password_verify($pass, $row->password)) {
                    session_regenerate_id();
                    $_SESSION['IS_LOGIN'] = TRUE;
                    $_SESSION['name'] = $username;
                    $_SESSION['ROLE']=$row->role;
                    $_SESSION['Token'] = $token;
                    return ['status' => true, 'success' => 'User loggedin'];
                } else {
                    return ['status' => false, 'error' => 'Credential error Password not matched '];
                }
            } else {
                return ['status' => false, 'error' => 'Credential not matched with our records'];
            }
        }
    }
    public function valid_email($email)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
    }
    public function valid_pass($password)
    {
        return (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) ? FALSE : TRUE;
    }
}
class IsLogin extends DB
{
    public function __construct()
    {
        if (!isset($_SESSION['IS_LOGIN']) && !isset($_SESSION['Token'])) {
            header('location:' . $this->BaseUrl() . '../index.php');
            exit;
        }
        
    }
}
class Token extends DB
{
    public function Csrf($length)
    {
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $length = rand(4,$length);
        $text='';
        for($i=0;$i<$length;$i++)
        {
            $random = rand(0,61);
            $text.=$array[$random];
        }
        return $text;
    }
}
