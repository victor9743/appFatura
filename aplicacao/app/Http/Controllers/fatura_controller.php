<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fatura;
use Illuminate\Http\Request;

class fatura_controller extends Controller
{
    public function index(){

        $faturas = Fatura::all();
   
        return view("/dashboard/index", ["faturas" => $faturas]);
    }

    public function create(){
        return view('dashboard/new');
    }

    public function salvar(Request $campos){

        if($campos->id == 0) {
            $campos->validate([
                'descricao' => 'required',
                'valorFatura' => 'required',
                'imgFatura' => 'required',
                'vencimento' => 'required'
            ]);

            $con = new Fatura;
            $con->descricao = $campos->descricao;
            $con->valorFatura = $campos->valorFatura;
            $con->imgFatura = $campos->imgFatura;
            $con->vencimento = $campos->vencimento;
            $con->imgRecibo = $campos->imgRecibo;
            $con->dataPagamento = $campos->dataPagamento;

            if($campos->hasFile('imgFatura') && $campos->file('imgFatura')->isValid()) {
                $requestImage = $campos->imgFatura;

                // atribuir a variavel a extensão do arquivo
                $extension = $requestImage->extension();

                // cria uma hash e concatena com o tempo atual
                $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

                // mover o arquivo/imagem para o diretório
                $campos->imgFatura->move(public_path('img/atributos'), $imageName);

                // salvar a url do arquivo/imagem no banco
                $con->imgFatura = $imageName;
            }

            if($campos->hasFile('imgRecibo') && $campos->file('imgRecibo')->isValid()) {
                $requestImage = $campos->imgRecibo;

                // atribuir a variavel a extensão do arquivo
                $extension = $requestImage->extension();

                // cria uma hash e concatena com o tempo atual
                $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

                // mover o arquivo/imagem para o diretório
                $campos->imgRecibo->move(public_path('img/atributos'), $imageName);

                // salvar a url do arquivo/imagem no banco
                $con->imgRecibo = $imageName;
            }
            $con->save();
        } else {
            $data = $request->all();
            Event::findOrFail($request->id)->update($data);

            if($campos->hasFile('imgFatura') && $campos->file('imgFatura')->isValid()) {
                $requestImage = $campos->imgFatura;

                // atribuir a variavel a extensão do arquivo
                $extension = $requestImage->extension();

                // cria uma hash e concatena com o tempo atual
                $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

                // mover o arquivo/imagem para o diretório
                $campos->imgFatura->move(public_path('img/atributos'), $imageName);

                // salvar a url do arquivo/imagem no banco
                $con->imgFatura = $imageName;
            }

            if($campos->hasFile('imgRecibo') && $campos->file('imgRecibo')->isValid()) {
                $requestImage = $campos->imgRecibo;

                // atribuir a variavel a extensão do arquivo
                $extension = $requestImage->extension();

                // cria uma hash e concatena com o tempo atual
                $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

                // mover o arquivo/imagem para o diretório
                $campos->imgRecibo->move(public_path('img/atributos'), $imageName);

                // salvar a url do arquivo/imagem no banco
                $con->imgRecibo = $imageName;
            }
        }

        return redirect("/fatura/index")->with('msg', 'Cadastro salvo com sucesso !!!');

    }

    public function mostrar($id){
        // findOrFail faz uma busca
        $event = Fatura::findOrFail($id);
        $user = auth()->user();
        $hasuserjoined = false;

        if($user){
            $eventUser = $user->eventParticipantes->toArray();

            foreach($eventUser as $y){
                if($y['id'] == $id){
                    $hasuserjoined = true;
                }
            }
        }

        // procura o usuário a partir do ID e transforma em um array
        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.mostrar',['event'=> $event, 'eventOwner'=> $eventOwner, 'hasuserjoined'=>$hasuserjoined]);

    }

    public function remover(){

    }
}
