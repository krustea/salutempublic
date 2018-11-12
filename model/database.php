<?php
require_once __DIR__ . "/../config/parameters.php";

try {
    $connexion = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';"
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
}

$files =glob(__DIR__ . "/entities/*.php");
foreach ($files as $file){
    require_once $file;
}


/**
 * Récupérer le nombre de lignes dans une table
 * @param string $table Nom de la table en base de données
 * @return int Nombre de lignes
 */
function getCountEntities(string $table) : int {
    global $connexion;

    $query = "SELECT COUNT(*) AS nb_rows FROM $table";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    $result = $stmt->fetch();

    return intval($result["nb_rows"]);
}

/**
 * Récupérer l'ensemble des lignes d'une table
 * @param string $table Nom de la table en base de données
 * @param int $id Identifiant de la ligne à récupérer
 * @return array Ensemble des données de la table
 */
function getAllEntities(string $table, int $id = null) : array {
    global $connexion;

    $query = "SELECT * FROM $table";

    if (isset($id)) {
        $query .= " WHERE id = :id";
    }

    $stmt = $connexion->prepare($query);
    if (isset($id)) {
        $stmt->bindParam(":id", $id);
    }
    $stmt->execute();

    return isset($id) ? $stmt->fetch() : $stmt->fetchAll();
}

/**
 * Supprimer une ligne dans une table de la base de données
 * @param string $table Nom de la table dans la base de données
 * @param int $id Identifiant de la ligne à supprimer
 * @return int|null Code erreur retourné par la requête SQL (ou null si pas d'erreur)
 */
function deleteEntity(string $table, int $id) : ?int {
    global $connexion;

    $errcode = null;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $errcode = $ex->getCode();
    }

    return $errcode;
}













