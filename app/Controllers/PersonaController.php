<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class PersonaController extends ResourceController {
    public function index() { return $this->respond($this->model->findAll()); }
    protected $modelName = 'App\Models\PersonaModel';
    protected $format    = 'json';
}
