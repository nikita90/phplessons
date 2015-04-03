<?
class queryClass {
	private $type;
	private $host;
	private $username;
	private $password;
	private $database;
	
	public function __construct($config) {
		$this->type=$config('type');
		$this->host=$config('host');
		$this->username=$config('username');
		$this->password=$config('password');
		$this->database=$config('database');
	}
}
?>
