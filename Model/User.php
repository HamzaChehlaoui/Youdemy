<?php  class User {
    private $conn;
    private $table = "users";

    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $status;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function setusername($username){
        $this->username =$username;
    }
    public function setemail($email){
        $this->email =$email;
    }
    public function setpassword($password){
        $this->password=$password;
    }
    public function setrole($role){
        $this->role=$role;
    }
    public function setstatus($status){
         $this->status=$status;
    }
    public function getusername(){
        return $this->username;
    }
    public function getemail(){
        return $this->email;
    }
    public function getpassword(){
        return $this->password;
    }
    public function getrole(){
        return $this ->role;
    }
    public function getstatus(){
        return $this->status;
    }
    public function register() {
        try {

            if ($this->emailExists()) {
                return ["success" => false, "message" => "Cet email est déjà utilisé"];
            }

            if ($this->usernameExists()) {
                return ["success" => false, "message" => "Ce nom d'utilisateur est déjà pris"];
            }

            $query = "INSERT INTO " . $this->table . "
                    (username, email, password, role, status)
                    VALUES (:username, :email, :password, :role, 'pending')";

            $stmt = $this->conn->prepare($query);

            $this->password = password_hash($this->password, PASSWORD_DEFAULT);

            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":role", $this->role);

            if ($stmt->execute()) {
                return ["success" => true, "message" => "Compte créé avec succès"];
            }
            return ["success" => false, "message" => "Une erreur est survenue lors de l'inscription"];

        } catch(PDOException $e) {
            return ["success" => false, "message" => "Erreur: " . $e->getMessage()];
        }
    }

    public function login() {
        try {
            $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":email", $this->email);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($this->password, $row['password'])) {
                if ($row['status'] !== 'active') {
                    return ["success" => false, "message" => "Votre compte est en attente d'activation"];
                }

                session_start();
                $_SESSION['user_id'] = $row['id_user'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];

                return ["success" => true, "message" => "Connexion réussie"];
            }

            return ["success" => false, "message" => "Email ou mot de passe incorrect"];

        } catch(PDOException $e) {
            return ["success" => false, "message" => "Erreur: " . $e->getMessage()];
        }
    }

    private function emailExists() {
        $query = "SELECT id_user FROM " . $this->table . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }

    private function usernameExists() {
        $query = "SELECT id_user FROM " . $this->table . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }
  

}
?>