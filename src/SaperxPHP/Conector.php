<?php namespace \SaperxPHP;

class Conector
{
    private $host;
    private $usuario;
    private $senha;
    private $porta;
    private $dbname;

    public function __construct($host, $usuario, $senha, $porta, $dbname)
    {
        $this->host    = $host;
        $this->usuario = $usuario;
        $this->senha   = $senha;
        $this->porta   = $porta;
        $this->dbname  = $dbname;
    }
}
