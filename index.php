<!DOCTYPE html>

<html>

<body>

<?php

echo "My first PHP script!";

$con=pg_connect("host=dpg-d046ndbuibrs73aq4v60-a dbname=projectdb_75bu user=projectdb password=kcTYffQ7HPvaXSsiFAOPOir52XQ0UOP8");

$sql=pg_query("create table testing(id integer)");

echo " script! Executed";

?>

</body>

</html>
