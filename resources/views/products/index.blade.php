@extends('layouts.app')

<style>

    li{
        margin-bottom:5px;
    }
</style>

@section('content')
    <div class="container">
        
        <div class="row">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Novo produto</a>
        </div>
        <br>
        <div class="row">
            <h3>Listagem de Produtos</h3>
            
        </div>
        <br>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Criação</th>
                    <th>Atualização</th>
                    <th>Ação</th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td> <a href="{{route('products.show', ['product' => $product->id])}}">{{ $product->nome }}</a></td>
                        <td>{{ $product->desc }}</td>
                        <td>
                            {{ $product->quantidade }}
                            <ul class="list-inline list-small">
                                <li>
                                        
                                    <form method="POST" action="product/add/{{$product->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('GET') }}    
                                        <button class="btn btn-primary" type="submit">+</button>
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="product/remove/{{$product->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('GET') }}    
                                        <button class="btn btn-danger" type="submit">-</button>
                                    </form>
                                
                                </li>
                            
                            </ul>
                        
                        </td>
                        <td>{{ $product->preco }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <ul class="list-inline list-small">
                                <li>
                                    
                                    <a class="btn btn-primary" href="{{route('products.edit', ['product' => $product->id])}}">Editar</a>
                                </li>
                                
                                <li>
                                    <form method="POST" action="{{route('products.destroy',['product' => $product->id])}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}    
                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                    </form>
                                </li>
                                
                            </ul>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
                {{ $products->links() }}
            </table>
        </div>
    </div>
@endsection