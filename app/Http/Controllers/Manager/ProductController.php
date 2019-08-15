<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $pathView;

    public function __construct()
    {
        $this->pathView = 'manager.product.';
    }

    public function index()
    {
        return view($this->pathView.'index');
    }

    public function create()
    {
        return view($this->pathView.'create');
    }

    public function edit($id)
    {
        return view($this->pathView.'edit');
    }

    public function delete($id)
    {
        return view($this->pathView.'delete');
    }
}