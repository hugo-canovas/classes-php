<?php

    try{
        new mysqli('localhost', 'root', '', 'classes');
    }catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }



        

?>