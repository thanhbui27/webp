<?php

use MyApp\Controller;
use MyApp\Database;

/**
 * HomeController Class
 *
 * Represents the controller for the home-related functionality.
 */
class HomeController extends Controller
{
    /**
     * Display the index page.
     */
    public function index()
    {
        $data['title'] = "Home";
        $this->view('home', $data);
    }
}
