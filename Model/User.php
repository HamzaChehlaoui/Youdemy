<?php  
    namespace Users;
    use PDOException;
    use PDO;
    class User {
        protected $conn;
        protected $table = "users";

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
    class Admin extends User {
    

        public function __construct($db) {
            parent::__construct($db);
        }

        public function getAllTeachers() {
            $query = "SELECT u.*, 
                        (SELECT COUNT(*) FROM courses WHERE teacher_id = u.id_user) as course_count,
                        (SELECT COUNT(*) FROM enrollments ce 
                        JOIN courses c ON ce.course_id = c.id_courses
                        WHERE c.teacher_id = u.id_user) as student_count
                    FROM " . $this->table . " u 
                    WHERE u.role = 'teacher'";  
            
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        
        

        public function updateStatus($userId, $status) {
            $query = "UPDATE " . $this->table . " 
                    SET status = :status 
                    WHERE id_user = :id";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":status", $status);
            $stmt->bindParam(":id", $userId);
            return $stmt->execute();
        }

        public function deleteTeacher($userId) {
            $query = "DELETE FROM " . $this->table . " 
                    WHERE id_user = :id AND role = 'teacher'";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $userId);
            return $stmt->execute();
        }
    }
    ?>