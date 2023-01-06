<?php

    try
    {
         $bdd = new mysqli('localhost', 'root', '', 'classes');
    }catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>

<form action="User.php" method="post">
    <label for="login">Pseudo</label>
    <input type="text" name="login" id="login">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Inscription">
</form>

<?php

    $req = $bdd->prepare("INSERT into utilisateur VALUES (login, password, email, firstname, lastname)");
    $req->execute(array(
        'login' => $_POST['login'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        'firstname' => $_POST['name'],
        'lastname' =>$_POST['prenom']
    ))

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
        
        public function __construct($login, $password, $email, $firstname, $lastname)
        {
            $this->login = $login;
            $this->password = $password;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        public function id()
        {
            return $this->id;
        }

        public function login()
        {
            return $this->login;
        }

        public function password()
        {
            return $this->password;
        }

        public function email()
        {
            return $this->email;
        }

        public function firstname()
        {
            return $this->firstname;
        }

        public function lastname()
        {
            return $this->lastname;
        }
        

    }

    
    
?>