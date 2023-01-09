<?php

    try
    {
        $bdd = new mysqli('localhost', 'root', '', 'classes');
    }catch(Exception $e)
    {
        die ('Erreur : '.$e->getMessage());
    }
?>

<?php
    class User
    {

        private $id;
        public $login;
        private $password;
        public $email;
        public $firstname;
        public $lastname;

        public function __construct()
        {
            $this->id;
            $this->login;
            $this->password;
            $this->email;
            $this->firstname;
            $this->lastname;
        }

    }

    // VISUALISATION DES USERS DANS UN TEABLEAU

    // $req = ("SELECT * FROM utilisateurs");
    // $res = $bdd->query($req);

    // echo "<table>";
    // while($data = mysqli_fetch_array($res)){
    //     echo "<tr><td>".$data['login']."</td><td>".$data['email']."</td></tr>";
    // }
    // echo "</table>";

    // INSERTION USER BDD 

    // $req = "INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES ('test5', 'test', 'test5@gmail.com', 'test5', 'test5')";
    // $res = $bdd->query($req);

    // DELETE USER BDD

    // $req = "DELETE FROM utilisateurs WHERE id = 5";
    // $res = $bdd->query($req);

?>