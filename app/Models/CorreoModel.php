<?php namespace App\Models;
use CodeIgniter\Model;
class CorreoModel extends Model {
    protected $table = 'correo';
    protected $primaryKey = 'id_correo';
    protected $allowedFields = ['id_persona', 'correo'];
}
