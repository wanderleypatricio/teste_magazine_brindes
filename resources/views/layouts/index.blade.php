@extends('layouts.dashboard')

@section('content')
<div class="conteiner">
    <div class="row col-md-10" style="margin-left:40px;">
        <div style="text-align:right;"><b>Total de registros cadastrados:</b> {{$totalUsers ? sizeof($totalUsers) : ''}}</div>
        <table class="table table-responsive table-striped table-bordered table-hover">
            <thead class="bg-primary">
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Data de nascimento</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->cpf}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>
                        <a class="material-icons" href="{{route('layouts.user.edit',$user->id)}}" title="Alterar usuário">edit</a>
                <a class="material-icons" href="javascript:if(confirm('Deseja excluir este registro?')){window.location.href = '/delete/<?php echo $user->id ?>'}" title="Excluir">delete</a>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
            <tfooter>
                <td>
                    {{ $users->links() }}
                </td>
            </tfooter>
        </table>
    </div>
    <div class="row col-md-12" style="margin-left:40px;">
        <a class="btn btn-primary" href="/create">Novo usuário</a>
    </div>
</div>
@endsection
