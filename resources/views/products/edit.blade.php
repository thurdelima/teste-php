@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h3>Editar produto</h3>
            
            {!! Form::model($product, ['route' => ['products.update','product' => $product->id], 'class' => 'form', 'method' => 'PUT']) !!}

                @include('products._form')

                <div class="form-group">
                    {!! Form::submit('Salvar produto', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection