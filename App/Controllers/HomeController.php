<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = ['message' => 'Hello from MVC!'];
        $this->renderView('home/index', $data);
    }
    public function about() {
        $data = ['message' => 'This is the about page'];
        $this->renderView('home/about', $data);
    }
}
