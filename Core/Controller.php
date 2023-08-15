<?php
namespace Core;

class Controller {
    protected function renderView($view, $data = []) {
        extract($data);
        require_once "../App/Views/$view.php";
    }
}
