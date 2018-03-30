<?php namespace \SaperxPHP;

class SPX
{
    /**
     * @var \SaperxPHP\Conector
     */
    private $conector;

    public function __construct(\SaperxPHP\Conector $conector)
    {
        $this->conector = $conector;
    }

    public function filtro($str)
    {
        return filter_var($str, FILTER_SANITIZE_STRING);
    }
}
