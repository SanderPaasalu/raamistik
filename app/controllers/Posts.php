<?php


class Posts extends Controller
{

    /**
     * Posts constructor.
     */
    public function __construct()
    {
        echo 'Posts class is loaded<br>';
    }
    public function index(){
        echo 'index method is loaded<br>';
    }
    public function about(){
        echo 'about method is loaded<br>';
    }
}