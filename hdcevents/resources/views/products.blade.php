@extends ('layouts.main')

@section('title','Produtos')

@section('content')
<h1>pagina de produtos</h1>

<a href="/contact">Ir para pagina de contatos </a>
<br/>
<a href="/"> voltar para o inicio </a>

@if ($qtestoque > 10)
    <p>disponivel</p>
@else
    <p>insdiponivel</p>
@endif
@endsection