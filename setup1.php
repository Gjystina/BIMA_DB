<?php>
	$php_version=phpversion();
	if($php_version<5)
	{
		$error=true;
		$php_error="PHP version is $php_version - too old!";
	}
	function find_SQL_Version() { 
	$output = shell_exec('mysql -V');    
	preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version); 
	return @$version[0]?$version[0]:-1; 
	}
 
	$mysql_version=find_SQL_Version();        
	if($mysql_version<5)
	{
		if($mysql_version==-1) $mysql_error="MySQL version will be checked at the next step.";
		else $mysql_error="MySQL version is $mysql_version. Version 5 or newer is required.";
	}
		$db_error=false;
		// try to connect to the DB, if not display error
		if(!@mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpass']))
		{
		$db_error=true;
		$error_msg="Sorry, these details are not correct. 
		Here is the exact error: ".mysql_error();
		}
 
		if(!$db_error and !@mysql_select_db($_POST['dbname']))
		{
		$db_error=true;
		$error_msg="The host, username and password are correct. 
		But something is wrong with the given database.
		Here is the MySQL error: ".mysql_error();
		}
		$connect_code="<?php
			define('DBSERVER','".$_POST['dbhost']."');
			define('DBNAME','".$_POST['dbname']."');
			define('DBUSER','".$_POST['dbuser']."');
			define('DBPASS','".$_POST['dbpass']."');
			?>";
			$q="DROP TABLE IF EXISTS `users`;";
			mysqli_query($db_link,$q);
 
			$q="CREATE TABLE `users` (
			`id` bigint(20) unsigned NOT NULL auto_increment,
			`username` varchar(100) NOT NULL default '',        
			`level` varchar(100) NOT NULL default '',        
			PRIMARY KEY  (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8";           
			mysqli_query($db_link,$q);
 
			$q="INSERT INTO `users` (username, level) VAUES ('admin','admin');";
			mysqli_query($db_link,$q);
		
?>