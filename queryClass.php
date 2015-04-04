<?
class queryClass {
	protected $type;
	protected $host;
	protected $username;
	protected $password;
	protected $database;
	
	public function __construct($config) {
		$this->type=$config["type"];
		$this->host=$config["host"];
		$this->username=$config["username"];
		$this->password=$config["password"];
		$this->database=$config["database"];
		
		//try {
			if ($this->type=='mysql') {
				$link=mysql_connect($config['host'],$config['username'],$config['password']) or die('Нет соединения');//throw new NotConnectException('Нет соединения с Сервером');
				//mysql_query ("CREATE DATABASE IF NOT EXISTS ".$database) or die ("Не могу создать базу данных!");
				//echo $host;
				mysql_select_db($config['database']) or die ('Не удалось подключиться к БД');
				
			}
		//	catch (NotConnectException $e) {
		//		echo $e->getMessage();
		//	}
		//}
	}
	
	public function select($columns) {
		
	}
	
	public function getConfig() {
		$config["type"]=$this->type;
		$config["host"]=$this->host;
		$config["username"]=$this->username;
		$config["password"]=$this->password;
		$config["database"]=$this->database;
		
		return $config;
	}
	
}

$conf=array(
	"type"=>"mysql", 
	"host"=>"localhost", 
	"username"=>"root", 
	"password"=>"", 
	"database"=>"testdb"
	);
	
//var_dump($conf);
//echo $conf["type"];
$db=new queryClass($conf);
print_r($db->getConfig());

$conn=mysql_connect("localhost","root","");
$database = "testdb";


?>
