<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    private $pathView;
    private $routeIndex;

    public function __construct()
    {
        $this->middleware('auth');
        $this->pathView = 'manager.product.';
        $this->routeIndex = 'manager.products';
    }

    public function index()
    {
        $data['products'] = Product::orderBy('updated_at', 'desc')->get();

        return view($this->pathView.'index', $data);
    }

    public function create(Request $request)
    {
        return view($this->pathView.'create');
    }

    public function createStore(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required|max:255',
            'enabled' => 'required',
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('products', 'public');

        Product::create($data);

        return redirect()->route('manager.products');
    }

    public function edit($id)
    {
        $data['product'] = Product::find($id);

        return view($this->pathView.'edit', $data);
    }

    public function delete()
    {
        return view($this->pathView.'delete');
    }
}