<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class DireccionController extends ResourceController {
    protected $modelName = 'App\Models\DireccionModel';
    protected $format    = 'json';
}
