<?php
//类名，也习惯上（推荐）使用跟文件名相似的名字
//定义一个类，该类可以连接mysql数据库
//并连接后返回资源（或失败就终止）
class mysqlDB{
	public $host;
	public $port;
	public $username;
	public $password;
	public $charset;
	public $dbname;

	//连接结果（资源）
	static $link;
	
	//构造函数
	public function __construct($config){
		//初始化数据
		$this->host = isset($config['host']) ? $config['host'] : 'localhost';
		$this->port = isset($config['port']) ? $config['port'] : '3306';
		$this->username = isset($config['username']) ? $config['username'] : 'root';
		$this->password = isset($config['password']) ? $config['password'] : '';
		$this->charset = isset($config['charset']) ? $config['charset'] : 'utf8';
		$this->dbname = isset($config['dbname']) ? $config['dbname'] : '';

		//连接数据库
		self::$link = $this->connect();
		//设定连接编码
		$this->setCharset($this->charset);
		//选定数据库
		$this->selectDb($this->dbname);
	}
	//这里进行连接
	public function connect(){
		$link = mysql_connect("$this->host:$this->port", "$this->username","$this->password") or die("连接数据库失败！");
		return $link;
	}
	public function setCharset($charset){
		mysql_set_charset($charset, self::$link); 
	}
	public function selectDb($dbname){
		mysql_select_db($dbname, self::$link) 
	}
}

//先设想：
$config = array(
	'host'=>'localhost',
	'port'=>'3306',
	'username'=>'root',
	'password'=>'123',
	'charset'=>'utf8',
	'dbname'=>'php34',
	);
$link = new mysqlDB( $config );
$result = $link->query("delete from tab1 where id=1");
