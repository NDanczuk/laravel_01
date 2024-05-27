<h3>Fornecedores</h3>


{{-- Comenttario será descartado pelo interpretador do blade --}}

{{-- @dd($fornecedores) --}}

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            Primeira iteração do loop
        @endif

        @if($loop->last)
            Ultima iteração do loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse

@endisset
