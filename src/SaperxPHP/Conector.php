<?php namespace \SaperxPHP;

class Conector
{
    private $host;
    private $usuario;
    private $senha;
    private $porta;
    private $dbname;

    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct($host, $usuario, $senha, $porta, $dbname)
    {
        $this->host    = $host;
        $this->usuario = $usuario;
        $this->senha   = $senha;
        $this->porta   = $porta;
        $this->dbname  = $dbname;

        $this->connect();
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    private function connect()
    {
        $dsn  = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";

        try {
            $this->pdo = new \PDO($dsn, $this->usuario, $this->senha, [
                \PDO::ATTR_PERSISTENT         => false,
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]);
        }
        catch (\PDOException $e) {
            throw new \Exception("SaperX database error.");
        }
    }
}
