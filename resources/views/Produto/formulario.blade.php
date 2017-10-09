@extends('layout.principal')
@section('conteudo')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-sm-9 col-sm-offset-1">
                <!-- general form elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center;">Cadastro de Produto</h3>
                    </div>
                    <div class="panel-body">
                        @if(Request::is('*/edit/*'))
                            {!! Form::model($produto,['class'=>'form-horizontal','method'=>'PATCH','url'=>'produtos/'.$produto->id]) !!}
                        @else
                            {!! Form::open(['class'=>'form-horizontal','url'=>'/produtos/adiciona']) !!}
                        @endif

                        <div class="form-group">
                            {!! Form::label('nome','Nome',['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text','nome',!empty($produto)?$produto->nome:null,['class'=>'form-control','autofocos','placeholder'=>'Nome']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('descricao','Descrição',['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text','descricao',!empty($produto)?$produto->descricao:null,['class'=>'form-control','autofocos','placeholder'=>'Descrição']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('valor','Valor',['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text','valor',!empty($produto)?$produto->valor:null,['class'=>'form-control','autofocos','placeholder'=>'Valor']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantidade','Quantidade',['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('number','quantidade',!empty($produto)?$produto->quantidade:null,['class'=>'form-control','autofocos','placeholder'=>'Quantidade']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3">
                                {!! Form::submit('Salvar',['class'=>'btn btn-success']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@stop
