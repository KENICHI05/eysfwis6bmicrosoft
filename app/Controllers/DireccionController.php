<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class DireccionController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\DireccionModel';
    protected $format    = 'json';
}
