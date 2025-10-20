<h3>Testando Blade</h3>
{{-- comentarios--}}
{{'xxxxxxxxxxxxxxxxx'}}
<br/>
<?='yyyyyyyyyyyyyyyyyy'?>
<br/>



@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>

@elseif(count($fornecedores) >= 10)
    <h3>Existem vários fornecedores cadastrados</h3>

@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif


@endphp
