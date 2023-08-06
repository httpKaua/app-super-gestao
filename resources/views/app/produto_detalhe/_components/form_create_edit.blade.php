@if (isset($produto_detalhe->id))
    <form action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}" method="post">
        @csrf
        @method('PUT')
    @else
        <form action="{{ route('produto-detalhe.store') }}" method="post">
            @csrf
@endif
<input type="text" name="produto_id" placeholder="ID do Produto" class="borda-preta" id="produto_id"
    value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}">
{{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

<input type="text" name="comprimento" placeholder="Comprimento" class="borda-preta" id="comprimento"
    value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}">
{{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

<input type="text" name="largura" placeholder="Largura" class="borda-preta" id="largura"
    value="{{ $produto_detalhe->largura ?? old('largura') }}">
{{ $errors->has('largura') ? $errors->first('largura') : '' }}

<input type="text" name="altura" placeholder="Altura" class="borda-preta" id="altura"
    value="{{ $produto_detalhe->altura ?? old('altura') }}">
{{ $errors->has('altura') ? $errors->first('altura') : '' }}

<select name="unidade_id" id="">
    <option value="">-- Selecione a Unidade de Medida --</option>

    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}
        </option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
