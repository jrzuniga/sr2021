<?php
namespace App\Models;

use CodeIgniter\Model;

class LineasproductosModel extends Model
{

    protected $table      = 'lineas_productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //Eliminación de filas

    protected $allowedFields = ['NombreLinea','activo'];

    protected $useTimestamps = false;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}


