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
}
