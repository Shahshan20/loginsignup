<?php
define("DB_SERVER", "demophpsignup2-server.mysql.database.azure.com");
define("DB_USERNAME", "qfsfdbxaab");
define("DB_PASSWORD", "ZH6M4CD8A10YW6G3$");
define("DB_NAME", "registered");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
