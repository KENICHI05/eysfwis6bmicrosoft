<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class EstadoCivilController extends ResourceController {
    protected $modelName = 'App\Models\EstadoCivilModel';
    protected $format    = 'json';
}
