{!! Form::hidden('product', $product) !!}

<div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descrição','Descrição') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('quantidade', 'Quantidade') !!}
    {!! Form::number('quantidade', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('preço', 'Preço') !!}
    {!! Form::number('preco', null, ['class' => 'form-control']) !!}
</div>
