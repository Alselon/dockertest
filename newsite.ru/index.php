<?php
#ini_set("display_startup_errors", 1);
#ini_set("display_errors", 1);
#ini_set("html_errors", 1);
#ini_set("log_errors", 1);
#error_reporting(E_ERROR | E_PARSE | E_WARNING);
#$con = mysqli_connect('172.30.0.1', 'docker_user', '112233Qw!', 'dockertest');
#phpinfo();
$configs = include('config.php');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд

$result = $mysqli->query('SELECT * FROM `testing`'); // запрос на выборку
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    echo '<p>Запись id='.$row['ID'].'. Текст: '.$row['Text'].'</p>';// выводим данные
}
?>
