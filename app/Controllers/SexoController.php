<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class SexoController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\SexoModel';
    protected $format    = 'json';
}
