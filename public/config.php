<?php
$db_url = getenv('DB_HOST') ?: "localhost";
$db_name = getenv('MYSQL_DATABASE') ?: "db"; //database name
$db_username = getenv('MYSQL_USER') ?: "myuser"; //database account username
$db_password = getenv('MYSQL_PASSWORD') ?: "mypassword"; //database account password
$epg_url_base = getenv('EPG_URL');
$epg_username = getenv('EPG_USERNAME');
$epg_password = getenv('EPG_PASSWORD');
$epg_url = $epg_url_base . "?username=" . $epg_username . "&password=" . $epg_password;
$epg_valid_hours = "+12 hours"; //if database has epg available for less than 12 hours it will be updated. Alternative values: "+1 day", "+2 days", "+1 week" etc etc
$cors = false;
//To avoid wasting server resources, epg update will be triggered when an user login and database has less than 12 hours of programmes.
?>
