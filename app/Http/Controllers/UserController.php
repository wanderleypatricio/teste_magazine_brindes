<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalUsers = User::all();
        $users = User::paginate(10);
        return view('layouts.index', ['users' => $users, 'totalUsers' => $totalUsers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $totalUsers = User::all();
        $users = User::paginate(10);
        return view('layouts.user.create',['users' => $users, 'totalUsers' => $totalUsers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $totalUsers = User::all();
        $users = User::paginate(10);
        $data = $request->all();

        $user = new User();

        $user->name = $data['nome'];
        $user->phone = $data['telefone'];
        $user->email = $data['email'];
        $user->cpf = $data['cpf'];
        $user->message = $data['mensagem'];
        $user->birthday = $data['data_nasc'];

        $validaEmail = $this->emailValidate($data['email']);

        if(sizeof($validaEmail) > 0){
            Session::flash('mensagem',['msg'=>'Já existe um usuário com esse email cadastrado!','class'=>'red white-text']);
            return redirect()->route('layouts.user.create', ['user' => $user, 'users' => $users,'totalUsers' => $totalUsers]);
        }

        $validaCpf = $this->cpfValidate($data['cpf']);

        if(sizeof($validaCpf) > 0){
            Session::flash('mensagem',['msg'=>'Já existe um usuário com esse cpf cadastrado!','class'=>'red white-text']);
            return redirect()->route('layouts.user.create', ['user' => $user, 'users' => $users, 'totalUsers' => $totalUsers]);
        }

        if($user->save()){
            Session::flash('mensagem',['msg'=>'Cadastro realizado com sucesso!','class'=>'green white-text']);
            return redirect()->route('layouts.index', ['user' => $user, 'totalUsers' => $totalUsers]);
        }else{
            Session::flash('mensagem',['msg'=>'Erro ao realizar cadastro de usuário','class'=>'red white-text']);
            return redirect()->route('layouts.user.create', ['user' => $user, 'totalUsers' => $totalUsers]);
        }
    }

    public function emailValidate($email){
        $email = DB::select('select * from users where email = ?', [$email]);
        return $email;
    }

    public function cpfValidate($cpf){
        $cpf = DB::select('select * from users where cpf = ?', [$cpf]);
        return $cpf;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $totalUsers = User::all();
        $users = User::paginate(10);
        return view('layouts.user.edit',['user' => $user, 'users' => $users, 'totalUsers' => $totalUsers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $totalUsers = User::all();

        $data = $request->all();

        $user = User::find($id);

        $user->name = $data['nome'];
        $user->phone = $data['telefone'];
        $user->email = $data['email'];
        $user->cpf = $data['cpf'];
        $user->message = $data['mensagem'];
        $user->birthday = $data['data_nasc'];

        if($user->save()){
            Session::flash('mensagem',['msg'=>'Alteração realizada com sucesso!','class'=>'green white-text']);
            return redirect()->route('layouts.index', ['user' => $user, 'totalUsers' => $totalUsers]);
        }else{
            Session::flash('mensagem',['msg'=>'Erro ao realizar alteração de usuário','class'=>'red white-text']);
            return view('layouts.user.edit', ['user' => $user, 'totalUsers' => $totalUsers]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $totalUsers = User::all();
        $user = User::find($id);

        if($user->delete()){
            Session::flash('mensagem',['msg'=>'Dados excluídos com sucesso!','class'=>'green white-text']);

        }else{
            Session::flash('mensagem',['msg'=>'Erro ao excluir dados de usuário','class'=>'red white-text']);

        }
        return redirect()->route('layouts.index', ['totalUsers' => $totalUsers]);
    }
}
