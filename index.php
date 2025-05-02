<?php
try {
    $pdo = new PDO("pgsql:host=dpg-d046ndbuibrs73aq4v60-a;port=5432;dbname=projectdb_75bu;user=projectdb;password=kcTYffQ7HPvaXSsiFAOPOir52XQ0UOP8");
    // use $pdo to query the database
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$sql=("CREATE TABLE aaa (
    SNO INT(5) NOT NULL AUTO_INCREMENT,
    UID VARCHAR(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    MOBILE_NO CHAR(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    NAME CHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    FATHER_NAME CHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    AMOUNT INT(10) NOT NULL,
    PASSWORD VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    DATE DATE NOT NULL DEFAULT CURRENT_DATE,
    TIME TIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (SNO)")
);

?>
