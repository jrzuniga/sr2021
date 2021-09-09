<?php

namespace App\Controllers;


use App\Models\LineasproductosModel;


use App\Controllers\BaseController;


class Lineasproductos extends  BaseController

{
    protected $lineasproductos;

    public function __construct()
    {
        
        $this->lineasproductos = new LineasproductosModel();
 
    }

    public function index( $activo=1)
    {
        
        $lineasproductos = $this->lineasproductos->where('activo',$activo)->findAll();
        $data = [ 'titulo' =>'Líneas de Productos', 'datos' => $lineasproductos];

        echo view ('header');
        echo view ('lineasproductos/lineasproductos', $data);
        echo view ('footer');

    }

    public function nuevo()
    {
        $data = [ 'titulo' =>'Agregar Líneas'];
        echo view ('header');
        echo view ('lineasproductos/nuevo', $data);
        echo view ('footer');

    }

    public function insertar()
    {

        $this->lineasproductos->save(['NombreLinea' => $this->request->getPost('nombre') ]);
        return redirect()->to(base_url().'/lineasproductos');

    }

    public function editar($id)
    {
        $unidad = $this->lineasproductos->where('id',$id)->first();
        $data = [ 'titulo' =>'Editar', 'datos' => $unidad];
        echo view ('header');
        echo view ('lineasproductos/editar', $data);
        echo view ('footer');

    }

    public function actualizar()
    {

        $this->lineasproductos->update($this->request->getPost('id'),
        ['NombreLinea' => $this->request->getPost('nombre')  ]);
        
        return redirect()->to(base_url().'/lineasproductos');
        


    }

    public function eliminar($id)
    {

        $this->lineasproductos->update($id,   ['activo' =>0]) ;
        
        return redirect()->to(base_url().'/lineasproductos');


    }

    public function activar($id)
    {

        $this->lineasproductos->update($id,   ['activo' =>1]) ;
        
        return redirect()->to(base_url().'/lineasproductos');


    }

    public function eliminados( $activo=0)
    {
        $lineasproductos = $this->lineasproductos->where('activo',$activo)->findAll();
        $data = [ 'titulo' =>'lineasproductos desactivadas', 'datos' => $lineasproductos];

        echo view ('header');
        echo view ('lineasproductos/eliminados', $data);
        echo view ('footer');

    }

    public function productos( $proveedor, $categoria)
    { 
        $filtro = array('Distribuidor' => $proveedor, 'Categoria' => $categoria);
        $productos = $this->productos->where($filtro)->findAll();
        #$productos = $this->productos->where('Distribuidor', $proveedor)->findAll();
        $proveedor = $this->lineasproductos->where('id', $proveedor)->first();
        $data = [ 'titulo' =>'Lista de productos ', 'datos' => $productos, 'proveedor' => $proveedor];

        echo view ('header');
        echo view ('lineasproductos/productos', $data);
        echo view ('footer');

    }

    public function detalleproducto( $item  )
    {
        
        #$detalleitem = $this->detalleproducto->where('id', $item)->findAll();
        $detalleitem = $this->detalleproducto->select("mp.*, d.Nombre")
        ->from("movimientosproductos as mp")
        ->join("lineasproductos as d", "d.id=mp.Distribuidor")
        ->where("mp.id", $item)->findAll();
        

        $item = $this->productos->where('id', $item)->first();
        
        $data = [ 'titulo' =>'Historial del producto ', 'datos' => $detalleitem, 'item'=> $item];

        echo view ('header');
        echo view ('lineasproductos/detalleproducto', $data);
        echo view ('footer');

    }



}