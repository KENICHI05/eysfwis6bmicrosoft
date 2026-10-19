<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class CorreoController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\CorreoModel';
    protected $format    = 'json';
}
