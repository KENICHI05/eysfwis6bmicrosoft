<?php namespace App\Models;
use CodeIgniter\Model;
class PersonaModel extends Model {
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    protected $allowedFields = ['nombres', 'apellidos', 'cedula', 'id_sexo', 'id_estado_civil'];
}
