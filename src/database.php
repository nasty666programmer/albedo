<?php  

namespace DevStart;
class Database{

    private $pdo;

    private $isConnected;

    private $statement;

    private $setting = [];

    private $parameters;

    public function __construct(array $setting) {
        $this->setting = $setting;

        $this->connect();
    }

    private function connect() {
        $dsn = 'mysql:dbname=' .$this->setting['dbname']. ';host=' .$this->setting['host'];

        try{
            $this->pdo = new \PDO($dsn,$this->setting['user'],$this->setting['password'], [
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES' .$this->setting['charset']
            ]);

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

            $this->isConnected = true;

        }catch(\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function closeConnection() {
        $this->pdo = null;
    }

    private function init(string $query, array $parameters  = []) {
        if(!$this->$isConnected) {
            $this->connect();
        }

        try{
            $this->statement = $this->pdo->prepare($query);

            $this->bind($parameters);
        }catch(\PDOException $e) {
            exit($e->getMessage());
        }
    }

    private function bind(array $parameters) {
        if(!empty($parameters) and is_array($parameters)) {
            $colums = array_keys($parameters);

            foreach($colums as $i => &$colum) {
                $this->parameters[sizeof($this->parameters)] =[
                    ':' .$column,
                    $parameters[$colum]
                ];
            }
        }
    }

    public function query(string $query, array $parameters, $mode = \PDO::FETCH_ASSOC) {
        $query = trim(str_replace('\r','',$query));
        $this->init($query,$parameters);
        $rawStatement = expolode(' ',preg_replace("/\s+|\t+|\n+/", "",$query ));
        $statement = strtolower($rawStatement[0]);
         if($statement==='select' || $statement==='show') {
                return $this->statement->fetchAll($mode);
         }else if($statement ==='insert' || $statement==='delete' || $statement ==='update'){
             return $this->statement->rowCount();
         }else {
             return null;
         }
    }

    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}



?>