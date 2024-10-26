<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
$db_server = "127.0.0.1";
$db_port = "33061";
$db_user = "root";
$db_password = "root";
$db_name = "gb_laravel_log_service";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name;port=$db_port", $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, time, duration, ip, url, method, input FROM logs";

    $statement = $db->prepare($sql);
    $statement->execute();

    $result_array = $statement->fetchAll();

    var_dump($result_array);

}

catch (PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getmessage();
}

$db = null;
@endphp

</body>
</html>



