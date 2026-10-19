<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class TelefonoController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\TelefonoModel';
    protected $format    = 'json';
}
