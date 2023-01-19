<?php

$mysqli = new mysqli("localhost", "projet_chaussures", 
"040904Adanledji", "chaussures");
if($mysqli){
    echo "connexion réussie";
}