@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h3>Novo Produto</h3>
            <br>

            
            
            
            {!! Form::open(['route' => 'products.store', 'class' => 'form']) !!}

                @include('products._form')

                <div class="form-group">
                    {!! Form::submit('Criar produto', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection