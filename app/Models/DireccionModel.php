<?php namespace App\Models;
use CodeIgniter\Model;
class DireccionModel extends Model {
    protected $table = 'direccion';
    protected $primaryKey = 'id_direccion';
    protected $allowedFields = ['id_persona', 'direccion_calle'];
}
