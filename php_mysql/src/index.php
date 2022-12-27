<?php 
$port = getenv('DB_PORT');
$host = getenv('DB_HOST');
$name = getenv('DB_NAME');
$password = getenv('MYSQL_ROOT_PASSWORD');

try {
    $db = new PDO("mysql:host={$host};dbname={$name};port={$port}", 'root', 'root');
    echo '接続成功';
} catch (PDOException $th) {
    echo $th->getMessage() . PHP_EOL;
    echo '何かがおかしいようです。';
}

?>