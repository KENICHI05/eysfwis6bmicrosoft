<?php namespace App\Models;
use CodeIgniter\Model;
class TelefonoModel extends Model {
    protected $table = 'telefono';
    protected $primaryKey = 'id_telefono';
    protected $allowedFields = ['id_persona', 'numero_telefono'];
}
