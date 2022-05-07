<?php
namespace App\Controllers;
use \Core\Controller;
class MainController extends Controller {
    public function index() {
        $this->title = 'Ukfdyfz';
        return $this->render('main');
    }
}