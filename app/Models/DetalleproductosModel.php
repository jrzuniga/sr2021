<?php
namespace App\Models;

use CodeIgniter\Model;

class DetalleproductosModel extends Model
{

    protected $table      = 'movimientosproductos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //Eliminación de filas

    protected $allowedFields = ['Costo', 'Fecha_compra','Distribuidor'];

    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}


