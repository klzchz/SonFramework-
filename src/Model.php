<?php 


namespace SON;


class Model {
    private $pdo ;

    public function __construct(\PDO $pdo = null)
    {
        $this->pdo = $pdo;
        var_dump($this->pdo);
    }
    public function get()
    {
        return  [
            'nome' => 'Lucas Andrade'
        ];
    }

}



