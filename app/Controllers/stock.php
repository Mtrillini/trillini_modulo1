<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index(): string
    {
        $productosModel = new ProductosModel;
        $productos = $productosModel->findAll();

        return view('stock/index', ['productos' => $productos]);
    }

    public function actualizarStockForm($productoId)
    {
        return view('stock/form', ['productoId' => $productoId]);
    }

    public function actualizarStock($productoId)
    {
        $nuevoStock = $this->request->getPost('nuevoStock');
        $productosModel = new ProductosModel();
        $productosModel->update($productoId, ['stock' => $nuevoStock]);
        return redirect()->to(site_url('stock'));
    }


}