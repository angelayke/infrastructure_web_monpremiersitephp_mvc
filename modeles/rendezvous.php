<?php

include_once "./include/config.php";

class modele_rendezvous {
    public $date_consultation;
    public $heure_consultation;

    public function __construct($date_consultation, $heure_consultation) {
        $this->date_consultation = $date_consultation;
        $this->heure_consultation = $heure_consultation;
    }

    static function connecter() {
        
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        // Vérifier la connexion
        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;
            exit();
        } 

        return $mysqli;
    }

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT date_consultation, heure_consultation FROM consultations ORDER BY date_consultation");


        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_rendezvous($enregistrement['date_consultation'], $enregistrement['heure_consultation']);
        }

        return $liste;
    }
}

?>