<?php

namespace App\Controllers;


use App\Models\LineasproductosModel;


use App\Controllers\BaseController;


class Lineasproductos extends  BaseController

{
    protected $lineaproductos;

    public function __construct()
    {
        
        $this->lineaproductos = new LineasproductosModel();
 
    }

    public function index( $activo=1)
    {
        $lineaproductos = $this->lineaproductos->select()->findAll();
        $data = [ 'titulo' =>'Líneas de Productos', 'datos' => $lineaproductos];

        echo view ('header');
        echo view ('lineasproductos/lineasproductos', $data);
        echo view ('footer');

    }

    public function nuevo()
    {
        $data = [ 'titulo' =>'Agregar unidad'];
        echo view ('header');
        echo view ('lineaproductos/nuevo', $data);
        echo view ('footer');

    }

    public function insertar()
    {

        $this->lineaproductos->save(['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')  ]);
        return redirect()->to(base_url().'/lineaproductos');


    }

    public function editar($id)
    {
        $unidad = $this->lineaproductos->where('id',$id)->first();
        $data = [ 'titulo' =>'Editar unidad ', 'datos' => $unidad];
        echo view ('header');
        echo view ('lineaproductos/editar', $data);
        echo view ('footer');

    }

    public function actualizar()
    {

        $this->lineaproductos->update($this->request->getPost('id'),
        ['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')  ]);
        return redirect()->to(base_url().'/lineaproductos');


    }

    public function eliminar($id)
    {

        $this->lineaproductos->update($id,   ['activo' =>0]) ;
        
        return redirect()->to(base_url().'/lineaproductos');


    }

    public function activar($id)
    {

        $this->lineaproductos->update($id,   ['activo' =>1]) ;
        
        return redirect()->to(base_url().'/lineaproductos');


    }

    public function eliminados( $activo=0)
    {
        $lineaproductos = $this->lineaproductos->where('activo',$activo)->findAll();
        $data = [ 'titulo' =>'lineaproductos desactivadas', 'datos' => $lineaproductos];

        echo view ('header');
        echo view ('lineaproductos/eliminados', $data);
        echo view ('footer');

    }

    public function productos( $proveedor, $categoria)
    { 
        $filtro = array('Distribuidor' => $proveedor, 'Categoria' => $categoria);
        $productos = $this->productos->where($filtro)->findAll();
        #$productos = $this->productos->where('Distribuidor', $proveedor)->findAll();
        $proveedor = $this->lineaproductos->where('id', $proveedor)->first();
        $data = [ 'titulo' =>'Lista de productos ', 'datos' => $productos, 'proveedor' => $proveedor];

        echo view ('header');
        echo view ('lineaproductos/productos', $data);
        echo view ('footer');

    }

    public function detalleproducto( $item  )
    {
        
        #$detalleitem = $this->detalleproducto->where('id', $item)->findAll();
        $detalleitem = $this->detalleproducto->select("mp.*, d.Nombre")
        ->from("movimientosproductos as mp")
        ->join("lineaproductos as d", "d.id=mp.Distribuidor")
        ->where("mp.id", $item)->findAll();
        

        $item = $this->productos->where('id', $item)->first();
        
        $data = [ 'titulo' =>'Historial del producto ', 'datos' => $detalleitem, 'item'=> $item];

        echo view ('header');
        echo view ('lineaproductos/detalleproducto', $data);
        echo view ('footer');

    }



}