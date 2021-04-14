<?php


class Posts extends Controller
{

    /**
     * Posts constructor.
     */
    public function __construct()
    {

    }
    public function index(){
        echo 'index method is loaded<br>';
    }
    public function about(){
        echo 'about method is loaded<br>';
    }
}