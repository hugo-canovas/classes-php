<?php 

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=classes', 'root', '');
    }catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    }

    class User
    {
        
        private $id;
        public $login;
        public $password;
        public $email;
        public $firstname;
        public $lastname;

        public function __construct($login, $password, $email, $firstname, $lastname)
        {
            $this->login = $login;
            $this->password = $password;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;

        }

        public function getId()
        {
            return $this->id;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getFirstname()
        {
            return $this->firstname;
        }

        public function getLastname()
        {
            return $this->lastname;
        }

        function register($login, $password, $email, $firstname, $lastname){
            global $bdd;

            $req = "INSERT INTO utilisateurs (login, password, email, firstname, lastname)VALUES ('$login', '$password', '$email', '$firstname', '$lastname')";
            mysqli_query($bdd, $req);
        }

        function update($login, $password, $email, $firstname, $lastname){
            global $bdd;

            $req = "UPDATE utilisateurs SET login = '$login', password = '$password', email = '$email', firstname = '$firstname', lastname = '$lastname'";
            $bdd->query($req);
        }

        function delete($id){
            global $bdd;

            $req = "DELETE FROM utilisateurs WHERE id = '$id'";
            $bdd->query($req);
        }

    }

?>