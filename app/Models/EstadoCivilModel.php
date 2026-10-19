<?php namespace App\Models;
use CodeIgniter\Model;
class EstadoCivilModel extends Model {
    protected $table = 'estado_civil';
    protected $primaryKey = 'id_estado_civil';
    protected $allowedFields = ['descripcion'];
}
