<?php
    
    try
    {
        $bdd = new mysqli('localhost', 'root', '', 'classes');
        echo 'connexion établie';
    }
    catch(Exception $e)
    {
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

    }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        
        <label for="login">Pseudo : </label>
        <input type="text" name="login">

        <label for="password">Mot de passe : </label>
        <input type="password" name="password">

        <label for="email">Email : </label>
        <input type="email" name="email">

        <label for="firstname">Nom : </label>
        <input type="text" name="firstname">

        <label for="lastname">Prénom : </label>
        <input type="text" name="lastname">

        <input type="submit" value="Inscrription">

    </form>
</body>
</html> -->

<?php

// if($_POST){
//     if($_POST['login'] != ''){
        
//         $req = $bdd->prepare("INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)");

//         $login = $_POST['login'];
//         $password = $_POST['password'];
//         $email = $_POST['email'];
//         $firstname = $_POST['firstname'];
//         $lastname = $_POST['lastname'];
        
//         $req->bind_param("sssss", $login, $password, $email, $firstname, $lastname);
//         $req->execute();

//     }
// }

    

    
    

?>