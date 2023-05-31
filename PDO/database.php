<?php

require_once('config.php');

class Database
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct()
    {
        //On récupère les constantes de connexion à la Bdd à partir du fichier config qu'on place dans le constructeur
        $this->host = DB_HOST;
        $this->dbname = DB_NAME;
        $this->username = DB_USER;
        $this->password = DB_PASSWORD;

        // Connexion à la base de données
        try {
            // on crée une ligne de paramètre contenant l'adresse du serveur, le nom de la base et son encodage
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";

            /*
                PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION : Cette option configure le mode de rapport d'erreurs pour l'objet PDO. 
                En utilisant PDO::ERRMODE_EXCEPTION, les exceptions seront lancées en cas d'erreur de requête, 
                ce qui facilite la gestion des erreurs dans le code.

                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : Cette option définit le mode de récupération par défaut pour les 
                résultats des requêtes. En utilisant PDO::FETCH_ASSOC, les résultats seront renvoyés sous forme d'arrays 
                associatifs, où les noms des colonnes seront utilisés comme clés.

                PDO::ATTR_EMULATE_PREPARES => false : Cette option désactive l'émulation des requêtes préparées. 
                Lorsque cette option est désactivée (à false), les requêtes préparées seront réellement utilisées, 
                ce qui offre une meilleure sécurité contre les attaques par injection SQL.
            */

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            /*
             On instancie la classe PDO pour créer la connexion à la base de données
             En paramètre on ajouter la variable dsn qui contient l'adresse du serveur, le nom de la bdd et l'encodage
             On y ajoute l'identifiant et le mot de passe
             A la fin on met le tableau d'options définies lignes 40 
            */
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }


// On crée une méthode qui sera utilisée pour réaliser des connexions bdd dans les autres classes de notre application
    public function getPdo()
    {
        return $this->pdo;
    }
}