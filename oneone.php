$ip = getenv('JAE_MYSQL_IP');
$port = getenv('JAE_MYSQL_PORT');
$host = $ip.":".$port;
$user = getenv('JAE_MYSQL_USERNAME');
$pass = getenv('JAE_MYSQL_PASSWORD');
$dbname   = getenv('JAE_MYSQL_DBNAME');
print("$ip")
