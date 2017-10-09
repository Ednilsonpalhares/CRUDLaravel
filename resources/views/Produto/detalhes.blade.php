@extends('layout.principal')
@section('conteudo')
    <br>
    <div class="col-sm-5 col-sm-offset-3">
        <!-- general form elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center;">Dados do Produto</h3>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td><b>Nome:</b> {{ $p->nome }}</td>
                </tr>
                <tr>
                    <td><b>Valor:</b> {{ $p->valor }}</td>
                </tr>
                <tr>
                    <td><b>Descrição:</b> {{ $p->descricao}}</td>
                </tr>
                <tr>
                    <td><b>Quantidade:</b> {{ $p->quantidade }}</td>
                </tr>
            </table>
        </div>
    </div>
@stop