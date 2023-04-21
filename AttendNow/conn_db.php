<?php
$serverName = "34.65.14.66"; // nazwa serwera SQL Server
$connectionOptions = array(
    "Database" => "attendnow", // nazwa bazy danych
    "Uid" => "sqlserver", // nazwa użytkownika
    "PWD" => "qwertyuiop123" // hasło użytkownika
);
// połączenie z bazą danych
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
    die("Błąd połączenia: " . sqlsrv_errors());
}
echo "Połączono z bazą danych SQL Server 2019";

?>
