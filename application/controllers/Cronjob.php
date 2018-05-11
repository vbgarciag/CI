<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cronjob extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->driver('cache');
        //$this->load->library('redis');

    }

    public function index()
    {
        $this->load->model('search');
        $users = $this->search_model->getUsers();
        $name = $this->cache->redis->get('name');
        var_dump($name);
    }
}