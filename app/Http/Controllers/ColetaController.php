<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Request;

class ColetaController extends Controller
{
    public function index(){
    	return "Essa é a index";
    }

    public function agendamentos(){
    	$coletas = DB::select("
    			SELECT u.id, u.nome AS reciclador, 
    			c.created_at AS data, 
    			c.endereco FROM usuarios u JOIN coletas c ON u.id = c.usuario_id 
    			WHERE u.tipo_usuario_id = 1;
				");
    	return view('coleta.coletas')->with('coletas', $coletas);
    }

    public function novo(){
    	return view('coleta.novo');
    }


    public function adicionar(){
    	$nome = Request::input('nome');
    	$email = Request::input('email');
    	$endereco = Request::input('endereco');
    	$date = date('Y-m-d H:i', strtotime(str_replace('/', '-', Request::input('data'))));
    	//('INSERT INTO usuarios VALUES(tipo_usuario_id, nome, email, senha, created_at)
    				//VALUES (?, ?, ?, ?, ? )', array(1, $nome, $email, '1234', date('Y-m-d H:i:s')));
    	$userId = DB::table('usuarios')->insertGetId(
    		array(
    			'tipo_usuario_id'=>1, 
    			'nome'=>$nome, 
    			'email'=>$email, 
    			'senha'=>'1234', 
    			'created_at'=>date('Y-m-d H:i:s'))
    		);

    	DB::insert('INSERT INTO coletas
    				(usuario_id, state_id, endereco, created_at) VALUES (?,?,?,?)',
    				array($userId, 1, $endereco, $date));

    	return view('coleta.adicionado');
    }

    

}
