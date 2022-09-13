<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function __construct(Usuario $usuario){

      $this->usuario =  $usuario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->usuario->all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return $this->usuario->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $usuarioShow =  $this->usuario->find($id);

        if($usuarioShow === null) {
          $usuarioShow = ['error' => 'Não encontrado'];
        }

       return $usuarioShow;

    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarioUpdate = $this->usuario->find($id);
        
        if($usuarioUpdate === null) {
         return ['error' => 'Não foi possível atualizar'];
        }
        return  $usuarioUpdate->update($request->all());
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuarioDelete = $this->usuario->find($id);

      if($usuarioDelete === null) {
        return ['error' => 'Não é possível realizar a operação'];
       }
      
      return  $usuarioDelete->delete();
    }

}
