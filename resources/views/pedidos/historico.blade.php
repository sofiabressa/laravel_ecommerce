@extends("layout");
@section("conteudo")
<script>
    $(function(){
        $(".infocompra").on('click', () => {
            //ao clicar no link com a .infocompra essa função sera executada
            let id = $(this).attr("data-value")
            $.post('{{ route("compras_detalhes") }}', { idpedido : id }, (result) => {
                //função de callback
                $("#conteudopedido").html(result)
            })
        })
    })
</script>


    <div class="col-12">
        <h2>Meus Pedidos</h2>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Data da compra</th>
                <th>Situação</th>
            </tr>
            @foreach($lista as $ped)
            <tr>
                <td>{{ \Carbon\Carbon::parse($ped->data_pedido)->format('d/m/Y H:i') }}</td>
                <td>{{ $ped->status }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info infocompra" data-value="{{ $ped->id }}" data-toggle="modal" data-target="#modalcompra">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="modal fade" id="modalcompra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Pedido</h5>
                </div>
                <div class="modal-body">
                    <div id="conteudopedido"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

@endsection