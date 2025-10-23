<h3>Testando Blade</h3>

@php
    

@endphp

@php
    //d ($fornecedores);
@endphp
Fornecedor : {{$fornecedores[1]["nome"]}};
<br>
Status     :{{$fornecedores[1]["status"]}};
<br>
@if($fornecedores[0]['status']== 'N')
    fornecedore inativo
@endif   









