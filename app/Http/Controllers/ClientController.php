<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client;
use View;
use Redirect;
use App\Http\Requests\CreateClientRequest;
use Illuminate\Routing\Route;

class ClientController extends Controller
{

    /**
    * Funcion para optimizar nuestro código y no repetir lineas
    * [__construct description]
    */
    public function __construct(){
      $this->beforeFilter('@find',['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
      $this->client = Client::find($route->getParameter('client'));
      $this->notFound($this->client);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Client::orderBy('name', 'ASC')->get();
      return View::make('admin.client.view_client', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $client = new Client;
      $show = false;
      return View::make('admin.client.new_edit_client', compact('client', 'show'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
      $client = Client::create($request->all());
      return Redirect::to('admin/client')->with('success_message', 'Saved information!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $client = Client::where('slug','=', $slug)->firstOrFail();
      $show = true;
      return View::make('admin.client.new_edit_client', compact('client', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $show = false;
      return view('admin.client.new_edit_client', ['client' => $this->client, 'show' => $show]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateClientRequest $request, $id)
    {
      $this->client->fill($request->all());
      $this->client->save();
      return Redirect::to('admin/client')->with('success_message', 'Update information!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->client->delete();
      return Redirect::to('admin/client')->with('success_message', 'The information has been deleted.')->withInput();
    }
}
