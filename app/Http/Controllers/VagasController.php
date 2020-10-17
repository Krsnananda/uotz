<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vagas;

class VagasController extends Controller
{
    public function index()
    {
      $vagas = auth()->user()->vagas;

      return response()->json([
        'success' => true,
        'data' => $vagas
      ]);
    }

    public function show($id)
    {
      $vaga = auth()->user()->vagas()->find($id);

      if(!$vaga) {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não encontrada'
        ], 400);
      }

      return response()->json([
        'success' => true,
        'data' => $vaga->toArray()
      ], 400);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'nome_vaga' => 'required',
        'pais' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'departamento' => 'required',
        'tipo' => 'required',
        'descricao' => 'required',
        'autor_id' => 'required'
      ]);

      $vaga = new Vaga();
      $vaga->nome_vaga = $request->nome_vaga;
      $vaga->pais = $request->pais;
      $vaga->cidade = $request->cidade;
      $vaga->estado = $request->estado;
      $vaga->departamento = $request->departamento;
      $vaga->tipo = $request->tipo;
      $vaga->descricao = $request->descricao;
      $vaga->autor_id = $request->autor_id;

      if(auth()->user()->vagas()->save($vaga)) {
        return response()->json([
          'success' => true,
          'data' => $vaga->toArray()
        ]);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não adicionada'
        ], 500);
      }
    }

    public function update(Request $request, $id)
    {
      $vaga =  auth()->user()->vagas()->find($id);

      if(!$vaga) {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não encontrada'
        ], 400);
      }

      $updated = $vaga->fill($request->all())->save();

      if($updated) {
        return response()->json([
          'success' => true,
        ]);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não pode ser atualizada'
        ], 500);
      }
    }

    public function destroy($id) {
      $vaga = auth()->user()->vagas()->find($id);

      if(!$vaga) {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não encontrada'
        ], 400);
      }

      if($vaga->delete()) {
        return response()->json([
          'success' => true
        ]);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'Vaga não pode ser deletada'
        ], 500);
      }
    }
}
