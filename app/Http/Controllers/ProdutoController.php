<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\ItensPedido;
use App\Services\VendaService;

class ProdutoController extends Controller
{
    public function index(Request $request){
        
        $data = [];

        //Buscar todos os produtos select * from produtos
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;

        return view('home', $data);
    }

    public function categoria(Request $request, $idcategoria = 0){
        
        $data = [];

        //select * from categoria
        $listaCategorias = Categoria::all();

        //select * from produtos limit 4
        $queryProduto = Produto::limit(10);

        if($idcategoria != 0){
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data ["lista"] = $listaProdutos;
        $data ["listaCategoria"] = $listaCategorias;
        $data ["idcategoria"] = $idcategoria;
        return view('categoria', $data);
    }

    public function adicionarCarrinho(Request $request, $idproduto = 0){
        
        //buscar produto pelo id
        $prod = Produto::find($idproduto);

        if($prod){

            //buscar da sessão o carrinho atual
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session([ 'cart' => $carrinho ]);
        }

        return redirect()->route("home");
    }

    public function verCarrinho(Request $request){

        $carrinho = session('cart', []);
        $data = [ 'cart' => $carrinho ];
        return view("carrinho", $data);
    }

    public function excluirCarrinho(Request $request, $indice){

        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }

        session(['cart' => $carrinho]);
        return redirect()->route("ver_carrinho");
    }

    public function finalizarCarrinho(Request $request){

        $prods = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods, \Auth::user());

        if($result["status"] == "ok"){
            $request->session()->forget("cart");
        }

        $request->session()->flash($result["status"], $result["message"]);
        return redirect()->route("ver_carrinho");
    }

    public function historico(Request $request){

        $data = [];

        //Pegar o id do usuario logado
        $idusuario = \Auth::user()->id;

        $listaPedido = Pedido::where("usuario_id", $idusuario)
                            ->orderBy("data_pedido", "desc")
                            ->get();

        $data["lista"] = $listaPedido;
        return view("pedidos/historico", $data);
    }

    public function detalhes(Request $request){

        $idpedido = $request->input("idpedido");
        $listaItens = ItensPedido::join("produtos", "produtos.id", "=", "itens_pedidos.produto_id")
                                ->where("pedido_id", $idpedido)
                                ->get([ 'itens_pedidos.*', 'itens_pedidos.valor as valorItem', 'produtos.*']);
        
        $data = [];
        $data["listaItens"] = $listaItens;
        return view("pedidos/detalhes", $data);

    }
}
