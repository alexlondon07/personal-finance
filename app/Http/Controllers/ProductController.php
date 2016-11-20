<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Attachment;
use App\Product;
use View;
use Redirect;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use Illuminate\Routing\Route;

class ProductController extends Controller
{

      /**
      * Funcion para optimizar nuestro código y no repetir lineas
      * [__construct description]
      */
      public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit', 'update', 'destroy']]);
      }

      public function find(Route $route){
        $this->product = Product::find($route->getParameter('product'));
        $this->notFound($this->product);
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Product::orderBy('name', 'ASC')->get();
      return View::make('admin.product.view_product', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $product = new Product;
      $show = false;
      return View::make('admin.product.new_edit_product', compact('product', 'show'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
      $product = Product::create($request->all());
      //Ingresamos la imagen relacionada
      if (\Input::hasFile('file')) {
        $f = \Input::file('file');
        if ($f) {
          $att = new Attachment;
          $att->product_id = $product->id;
          $r = array();
          $r = AttachmentController::uploadAttachment($f, $att);
        }
      }
      return Redirect::to('admin/product')->with('success_message', 'Saved information!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $product = Product::where('slug','=', $slug)->firstOrFail();
      $show = true;
      return View::make('admin.product.new_edit_product', compact('product', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $show = false;
      return view('admin.product.new_edit_product', ['product' => $this->product, 'show' => $show]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(EditProductRequest $request, $id)
     {
       $this->product->fill($request->all());
       $this->product->save();

       //Ingresamos la imagen seleccionada nuevamente
       if (\Input::hasFile('file')) {
         //Eliminamos la imagen anterior
         AttachmentController::destroyAllBy('product_id', $this->product->id);
         $f = \Input::file('file');
         if ($f) {
           $att = new Attachment;
           $att->product_id = $this->product->id;
           $r = array();
           $r = AttachmentController::uploadAttachment($f, $att);
         }
       }
       return Redirect::to('admin/product')->with('success_message', 'Update information!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
      $this->product->delete();
      //Eliminamos imagen asociada
      AttachmentController::destroyAllByUserId($this->product->id);
      return Redirect::to('admin/product')->with('success_message', 'The information has been deleted.')->withInput();
    }
}
