<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT id, nombre, precio, stock, codigo FROM productos");
        $resultados = $query->getResultArray();

        $data = [
            'titulo' => 'Catálogo',
            'productos' => $resultados
        ];

        return view('productos', $data);
    }

    public function verDetalle($id = null)
    {
        if ($id === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("ID no especificado");
        }

        $productoModel = new \App\Models\ProductosModel();
        $producto = $productoModel->find($id);

        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }

        return view('detalle', ['producto' => $producto]);
    }

    public function contacto()
    {
        return view('contacto');
    }



}
