<?php
try {
    $pdo = new PDO("pgsql:host=dpg-d046ndbuibrs73aq4v60-a;port=5432;dbname=projectdb_75bu;user=projectdb;password=kcTYffQ7HPvaXSsiFAOPOir52XQ0UOP8");
    // use $pdo to query the database
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  echo 'aa';
}
  echo 'ee';
?>
