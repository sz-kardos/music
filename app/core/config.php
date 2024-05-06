<?php 

if($_SERVER['SERVER_NAME'] == "localhost")
{

	//for local server
	define("ROOT", "http://localhost/projects/music");

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "music_website_db");

}else{

	//for online server
	define("ROOT", "http://www.gamfplayer.nhely.hu");	

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "music_website_db");
}
?>
