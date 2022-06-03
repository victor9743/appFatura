<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fatura;
use Illuminate\Http\Request;

class fatura_controller extends Controller
{
    public function index(){

        $usuario = auth()->user();
        $faturas = Fatura::all()->where("user_id", $usuario->id);
        
   
        return view("/dashboard/index", ["faturas" => $faturas]);
    }

    public function create(){
        return view('dashboard/new');
    }

    public function salvar(Request $campos){
        $con = new Fatura;
        $data = $campos->all();
        unset($data["id_Fatura"]);
        // pegando o usuario logado
        $usuario = auth()->user();
        $con->user_id = $usuario->id;

        if($campos->hasFile('imgFatura') && $campos->file('imgFatura')->isValid()) {
            $requestImage = $campos->imgFatura;

            // atribuir a variavel a extensão do arquivo
            $extension = $requestImage->extension();

            // cria uma hash e concatena com o tempo atual
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

            // mover o arquivo/imagem para o diretório
            $campos->imgFatura->move(public_path('img/faturas'), $imageName);

            // salvar a url do arquivo/imagem no banco
            if($campos->id_Fatura == 0) {
                $con->imgFatura = $imageName;
            } else {
                $data['imgFatura'] = $imageName;
            }
        }

        if($campos->hasFile('imgRecibo') && $campos->file('imgRecibo')->isValid()) {
            $requestImage = $campos->imgRecibo;

            // atribuir a variavel a extensão do arquivo
            $extension = $requestImage->extension();

            // cria uma hash e concatena com o tempo atual
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

            // mover o arquivo/imagem para o diretório
            $campos->imgRecibo->move(public_path('img/recibos'), $imageName);

            // salvar a url do arquivo/imagem no banco
            if($campos->id_Fatura == 0) {
                $con->imgRecibo = $imageName;
            } else {
                $data['imgRecibo'] = $imageName;
            }
        }

        if($campos->id_Fatura == 0) {
            $campos->validate([
                'descricao' => 'required',
                'valorFatura' => 'required',
                'imgFatura' => 'required',
                'vencimento' => 'required'
            ]);
          
            $con->descricao = $campos->descricao;
            $con->valorFatura = $campos->valorFatura;
            $con->imgFatura = $campos->imgFatura;
            $con->vencimento = $campos->vencimento;
            $con->imgRecibo = $campos->imgRecibo;
            $con->dataPagamento = $campos->dataPagamento;


            $con->save();
        } else {
            
            Fatura::findOrFail($campos ->id_Fatura)->update($data);
        }

        return redirect("/fatura/index")->with('msg', 'Cadastro salvo com sucesso !!!');

    }

    public function mostrar($id){
        // findOrFail faz uma busca
        $fatura = Fatura::findOrFail($id);
        return view('dashboard.new',['fatura'=>$fatura]);

    }

    public function remover($id){
        Fatura::findOrFail($id)->delete();
        return redirect("/fatura/index");

    }
}
