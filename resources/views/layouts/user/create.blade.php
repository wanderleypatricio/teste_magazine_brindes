@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <nav>
            <div class="nav-wrapper blue" style="margin-top:10px;">
                <div class="col-md-8">
                    <a href="/" class="breadcrumb">Início</a>
                    <a href="#" class="breadcrumb">Adiciona Usuário</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row col-md-8" style="margin-top:40px">
        <form action="/save" method="post">
            {{csrf_field()}}
            @include('layouts.user._form')
            <button class="btn btn-primary" style="margin-top:100px; margin-left: -230px;">
                Adicionar
            </button>
        </form>
    </div>
</div>
</div>
@endsection
