<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class PersonaController extends ResourceController {
    protected $modelName = 'App\Models\PersonaModel';
    protected $format    = 'json';
}
