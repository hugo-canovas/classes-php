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

   

    $req = mysqli_prepare($bdd, "INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)");



    
    
?>