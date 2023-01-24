<?php


namespace SON;

class Controller{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    protected function render(array $data =[],string $view = null)
    {
        if(!$view)
            $view = $this->controllerName().'/'.debug_backtrace()[1]['function'];

        extract($data);
        require __DIR__.'/../templates/'.$view.'.tpl.php';
    }

    public  function controllerName()
    {
        $class = get_class($this); // App\Controller\UserController
        $class = explode('\\',$class);// ['App'],['Controllers'],['UsersController']
        $class = array_pop($class); // UsersControllers
        $class = preg_replace('/Controller$/','',$class); //Users

        return strtolower($class);//Users


    }

    // public function nameModel()
    // {
    //     $class = get_class($this); // App\Controller\UserController
    //     $class = explode('\\',$class);// ['App'],['Controllers'],['UsersController']
    //     $class = array_pop($class); // UsersControllers
    //     $class = preg_replace('/Controller$/','',$class); //Users

    //     return substr($class,0,-1);
        
    // }

}


