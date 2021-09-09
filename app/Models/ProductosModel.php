<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{

    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //Eliminación de filas

    protected $allowedFields = ['Descripcion', 'Costo', 'Fecha_compra','Distribuidor','imagen','stock'];

    protected $useTimestamps = true;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}


