<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class TelefonoController extends ResourceController {
    protected $modelName = 'App\Models\TelefonoModel';
    protected $format    = 'json';
}
