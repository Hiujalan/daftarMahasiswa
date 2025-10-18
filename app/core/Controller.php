<?php
class Controller {
    public function views($view, $data = [])
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

     public function models($models)
    {
        require_once __DIR__ . '/../models/' . $models . '.php';
        return new $models;
    }
}
?>