@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Editar produto</h3>
                
                {!! Form::model($product, ['route' => ['products.index'], 'class' => 'form']) !!}

                    {!! Form::hidden('product', $product) !!}

                    <div class="form-group">
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::text('nome', null, ['class' => 'form-control', 'readonly' =>'true']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descrição','Descrição') !!}
                        {!! Form::text('desc', null, ['class' => 'form-control', 'readonly' =>'true']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('quantidade', 'Quantidade') !!}
                        {!! Form::number('quantidade', null, ['class' => 'form-control', 'readonly' =>'true']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('preço', 'Preço') !!}
                        {!! Form::number('preco', null, ['class' => 'form-control', 'readonly' =>'true']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Voltar', ['class' => 'btn btn-primary', 'readonly' =>'true']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection