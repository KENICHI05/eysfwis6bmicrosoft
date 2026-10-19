<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class EstadoCivilController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\EstadoCivilModel';
    protected $format    = 'json';
}
