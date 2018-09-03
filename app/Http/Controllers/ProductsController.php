<?php

namespace App\Http\Controllers;
use DB;
use App\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function index()
    {
        //$products = Product::all();
        $products = DB::table('products')->paginate(9);
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
         $product = $request->get('product');
        // $product = Product::getProduct($paramProduct);

        return view('products.create',  compact('product'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Product::create($data);
        return redirect()->route('products.index');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        
        if(!$product){
            abort(404);
        }
        
        return view('products.edit', compact('product'));
        
    }

    public function show($id)
    {
        $product = Product::find($id);
        
        if(!$product){
            abort(404);
        }
        
        return view('products.view', compact('product'));
    }


    public function addQtde($id, $qtde = 1)
    {
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }

        $product->quantidade += $qtde;
        $product->save();
        return redirect()->route('products.index');

    }

    public function removeQtde($id, $qtde = 1)
    {
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }

        $product->quantidade -= $qtde;
        $product->save();
        return redirect()->route('products.index');

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product){
            abort(404);
        }

        $product->nome = $request->nome; //$request->get('name')
        $product->desc = $request->desc;
        $product->quantidade = $request->quantidade;
        $product->preco = $request->preco;
        $product->save();
        return redirect()->route('products.index');

        // $data = $request->all();
        
        // $pro->save($data);

        // return redirect()->route('clients.index');
        
    }

    public function destroy($id)
    {
        if (!($product = Product::find($id))) {
            throw new ModelNotFoundException("Produto não foi encontrado");
        }

        $product->delete();
        return redirect()->route('products.index');
    }
}
