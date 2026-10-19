<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class SexoController extends ResourceController {
    protected $modelName = 'App\Models\SexoModel';
    protected $format    = 'json';
}
