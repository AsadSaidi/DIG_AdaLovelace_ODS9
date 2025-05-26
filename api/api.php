<?php
// api.php
header('Content-Type: application/json');

$dbPath = __DIR__ . '/../database/database.db';

$allowedTables = [
  "poblacio_comarques",
  "poblacio_sectors",
  "atur_comarca",
  "vab_comarques",
  "inversions_comarques",
  "inversions_liquidades_comarques"
];

// Comprovar si s'està demanant columnes
if (isset($_GET['table']) && preg_match('/^([a-zA-Z0-9_]+)\/columns$/', $_GET['table'], $matches)) {
    $table = $matches[1];
    if (!in_array($table, $allowedTables)) {
        echo json_encode(["error" => "Taula no vàlida."]);
        exit;
    }
    try {
        $pdo = new PDO("sqlite:$dbPath");
        $stmt = $pdo->query("PRAGMA table_info($table)");
        $cols = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array_column($cols, 'name'));
    } catch (Exception $e) {
        echo json_encode(["error" => "Error accedint a la base de dades.", "detall" => $e->getMessage()]);
    }
    exit;
}

if (!isset($_GET['table'])) {
    echo json_encode(["error" => "Falta el paràmetre 'table'."]);
    exit;
}

$table = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['table']);

if (!in_array($table, $allowedTables)) {
    echo json_encode(["error" => "Taula no vàlida."]);
    exit;
}

$where = [];
$params = [];

if (isset($_GET['comarca'])) {
    $where[] = "comarca = :comarca";
    $params[':comarca'] = $_GET['comarca'];
}

$select = "*";

if (isset($_GET['year'])) {
    $year = preg_replace('/[^0-9]/', '', $_GET['year']);
    $select = "comarca, `$year`";
}

try {
    $pdo = new PDO("sqlite:$dbPath");
    $sql = "SELECT $select FROM $table";
    if (!empty($where)) {
        $sql .= " WHERE " . implode(" AND ", $where);
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
} catch (Exception $e) {
    echo json_encode(["error" => "Error accedint a la base de dades.", "detall" => $e->getMessage()]);
}

?>