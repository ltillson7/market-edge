<?php
class Database
{
	private static $user = 'enrinawi_stock';
	private static $pass = 'teameagles2019'; //change to nothing with xampp
	private static $db = 'enrinawi_stock_market';
	private static $dsn = 'mysql:host=localhost;dbname=enrinawi_stock_market';
	private static $dbcon;
	private function __construct()
	{

	}
	public static function getDb(){
		if(!isset(self::$dbcon)){
			try{
				self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
				self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e){
				$msg = $e->getMessage();
				echo $msg;
				exit();
			}
		}
		return self::$dbcon;
	}
}