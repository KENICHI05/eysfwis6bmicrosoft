<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class CorreoController extends ResourceController {
    protected $modelName = 'App\Models\CorreoModel';
    protected $format    = 'json';
}
