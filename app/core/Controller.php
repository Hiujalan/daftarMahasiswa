<?php
class Controller {
    public function views($view, $data = [])
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

     public function models($model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }
}
?>