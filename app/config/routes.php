<?php
    use \Core\Route;
    return [
        new Route('/', 'Main', 'index'),
        new Route('/login', 'Login', 'index'),
        new Route('/error', 'Error', 'notFound')
    ];