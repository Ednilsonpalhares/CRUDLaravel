@extends('layout.principal')
@section('conteudo')

<section class="container">
    <div class="row">
        @if(empty($produtos))
            <div class="col-sm-6 col-sm-offset-3">
                <div class="alert alert-danger">
                    Voce não tem nenhum produto cadastro.
                </div>
            </div>
        @else
        <fieldset>
            <div class="col-sm-6 col-sm-offset-3">
                <form class="navbar-form navbar-left" role="search" method="get" action="">
                    <div class="form-group">
                        <label>Descrição:</label>
                        <input type="text" id="criterio" name="criterio" value="" class="form-control" placeholder="Descrição">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
            </div>
        </fieldset>
            <!-- left column -->
        <div class="col-sm-11 col-sm-offset-0">
            <!-- general form elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center;">Produtos</h3>
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped table-bordered table-hover">
                        <tr>
                            <th>Nome</th>
                            <th>valor</th>
                            <th>Descrição</th>
                            <th>Quantidade</th>
                            <th colspan="3">
                                <center>Ações</center>
                            </th>
                        </tr>
                        @foreach ($produtos as $p)
                        <tr class="{{$p->quantidade<=1 ? 'danger':''}}">
                            <td>{{$p->nome}}</td>
                            <td>{{$p->valor}}</td>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->quantidade}}</td>
                            <td style="width: 10px">
                                <a href="{{action('ProdutoController@mostra', $p->id)}}" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-eye-open"></span> Detalhes
                                </a>
                            </td>
                            <td style="width: 10px"><a href="{{action('ProdutoController@edit',$p->id)}}"
                                                       class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span> Editar
                                </a>
                            </td>
                            <td style="width: 10px"><a href="{{action('ProdutoController@remove',$p->id)}}"
                                                       class="btn btn-danger btn-sm">
                                    <span class="fa fa-trash-o"></span> Excluir
                                </a>
                            </td>
                        </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
        @endif
            <div class="col-sm-6 col-sm-offset-3">
                <h4>
                    <span class="label label-danger pull-right">
                    Um ou menos itens no estoque
                    </span>
                </h4>
            </div>
    </div>
    <!-- /.row -->
</section>
@stop
