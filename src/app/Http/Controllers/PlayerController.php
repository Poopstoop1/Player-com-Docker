<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musicas;

class PlayerController extends Controller
{

    public function index(){

        $lista = Musicas::all();

        // var_dump($lista).exit();

        if(count($lista) <= 0){
            $lista = new Musicas();
            $lista->title = "I Want You Back";
            $lista->artist = "jakson fives";
            $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/jackson-fives.jpeg";
            $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/jackson-fives.mp3";
            $lista->save();

            $lista = new Musicas();
            $lista->title = "Pra onde eu irei?";
            $lista->artist = "Morada";
            $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/morada.png";
            $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/Pra-onde-eu-irei.mp3";
            $lista->save();
        }



        return response()->json($lista); 

    }
    //BuscarPorID
    public function buscarId($id){
        $lista = Musicas::find($id);

        return response()->json($lista);
    }


    public function salvar(Request $request){
        $musica = new Musicas();
        $musica->title = $request->title;
        $musica->artist = $request->artist;
        $musica->imageUrl = $request->imageUrl;
        $musica->audioUrl = $request->audioUrl;
        $musica->save();
        return response()->json($musica, 201);
    }
    
    public function atualizar(Request $request, $id)
    {
        $musica = Musicas::find($id);
        if (!$musica) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $musica->title = $request->title;
        $musica->artist = $request->artist;
        $musica->imageUrl = $request->imageUrl;
        $musica->audioUrl = $request->audioUrl;
        $musica->save();

        return response()->json($musica);
    }

    public function deletar($id){
    $lista = Musicas::find($id);

    if($lista){
            $lista->delete();
            return response()->json(['sucess' => 'Registro deletado']);
            $lista->save();
         } else {
            return response()->json(['error' => 'Registro não encontrado para deletar'], 404);
        }

  }
}