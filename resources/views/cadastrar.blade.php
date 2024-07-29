@extends("layout")
@section("script.js")
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$(function(){
    $('#cep').mask('00000-000')
})
</script>
@endsection

@section("conteudo")
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Usuário</h2>
    </div>
    <form action="{{ route('cadastrar_usuario') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    Nome: <input type="text" name="nome" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    E-mail: <input type="email" name="email" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Logradouro: <input type="text" name="logradouro" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Complemento: <input type="text" name="complemento" class="form-control" />
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    Número: <input type="text" name="numero" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Cidade: <input type="text" name="cidade" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    CEP: <input type="text" name="CEP" id="cep" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Estado: <input type="text" name="estado" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control" />
                </div>
            </div>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm" />
    </form>
@endsection
