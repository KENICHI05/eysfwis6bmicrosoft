<?php namespace App\Models;
use CodeIgniter\Model;
class SexoModel extends Model {
    protected $table = 'sexo';
    protected $primaryKey = 'id_sexo';
    protected $allowedFields = ['descripcion'];
}
