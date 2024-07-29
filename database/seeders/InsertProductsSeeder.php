<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\Log;

class InsertProductsSeeder extends Seeder
{
    public function run(): void
    {
        // Criar categoria
        //$cat = Categoria::create(['categoria' => 'Geral']);
        //$cat = Categoria::create(['categoria' => 'PC e Notebook']);
        //$cat = Categoria::create(['categoria' => 'Smartphone']);
        //$cat = Categoria::create(['categoria' => 'Games']);
        //$cat = Categoria::create(['categoria' => 'Teclado Gamer']);
        //$cat = Categoria::create(['categoria' => 'Mouse']);
        //$cat = Categoria::create(['categoria' => 'Headset Gamer']);
        //$cat = Categoria::create(['categoria' => 'Teclado e Mouse']);
        //$cat = Categoria::create(['categoria' => 'Gabinetes']);
        //$cat = Categoria::create(['categoria' => 'Monitores']);
        //$cat = Categoria::create(['categoria' => 'TV']);
        //$cat = Categoria::create(['categoria' => 'Cabos e Adaptadores']);
        //$cat = Categoria::create(['categoria' => 'Coolers']);
        //$cat = Categoria::create(['categoria' => 'Memória RAM']);
        //$cat = Categoria::create(['categoria' => 'Fontes']);
        //$cat = Categoria::create(['categoria' => 'Placas de Vídeo']);
        //$cat = Categoria::create(['categoria' => 'Placas-mãe']);
        //$cat = Categoria::create(['categoria' => 'Processadores']);
        //$cat = Categoria::create(['categoria' => 'Disco Rígido']);
        //$cat = Categoria::create(['categoria' => 'Caixa de Som']);
        
        // Criar produto
        /*$prod = Produto::create([
            'nome' => 'Iphone 13 Apple 128gb',
            'valor' => 3599.10,
            'foto' => 'images/Apple-iPhone-13.jpg',
            'descricao' => 'iPhone 13 Apple, 128GB, A15 Bionic, iOS, Câmera Dupla 12MP, Tela 6.1 - Meia-noite',
            'categoria_id' => 4
        ]);
        $prod2 = Produto::create([
            'nome' => 'Notebook Gamer Acer Nitro V15',
            'valor' => 4499.99,
            'foto' => 'images/notebook-gamer-acer-nitro-v15.jpg',
            'descricao' => 'Notebook Gamer Acer Nitro V15 Intel Core i5-13420H, 8GB RAM, GeForce RTX 3050, SSD 512GB, 15.6 FHD IPS 144Hz, Windows 11, Preto - ANV15-51-58AZ',
            'categoria_id' => 3
        ]);
        $prod3 = Produto::create([
            'nome' => 'Smartphone Samsung Galaxy S23 Ultra',
            'valor' => 4319.10,
            'foto' => 'images/Smartphone-Samsung-Galaxy-S23-Ultra.jpg',
            'descricao' => 'Smartphone Samsung Galaxy S23 Ultra, 5G, 256GB, 12GB RAM, Octa-Core, Câmera 200MP + Selfie 12MP, Tela 6.8, Caneta S Pen, Preto',
            'categoria_id' => 4
        ]);*/
        $prod4 = Produto::create([
            'nome' => 'Console PlayStation 5',
            'valor' => 3477.27,
            'foto' => 'images/console-playstation-5-slim.jpg',
            'descricao' => 'Console PlayStation 5 Slim, Edição Digital, Branco + 2 Jogos - 1000038914',
            'categoria_id' => 5
        ]);
        $prod5 = Produto::create([
            'nome' => 'Monitor Gamer LG 27',
            'valor' => 639.99,
            'foto' => 'images/monitor-gamer-lg-27-full-hd.jpg',
            'descricao' => 'Monitor Gamer LG 27 Full HD, IPS, HDMI e VESA, FreeSync, Ajuste de Ângulo, Bordas Finas - 27MP400-B',
            'categoria_id' => 11
        ]);
        $prod6 = Produto::create([
            'nome' => 'Smartphone Poco X6 Pro',
            'valor' => 2005.03,
            'foto' => 'images/Smartphone-Poco-X6-Pro.jpg',
            'descricao' => 'Smartphone Poco X6 Pro 256GB, 8GB RAM, Tela 6,67',
            'categoria_id' => 4
        ]);
        $prod7 = Produto::create([
            'nome' => 'Smart TV Samsung Crystal UHD',
            'valor' => 2349.90,
            'foto' => 'images/Smart-TV-Samsung-Crystal-UHD.jpg',
            'descricao' => 'Smart TV Samsung Crystal UHD 4K 50 Polegadas Com Gaming Hub, Visual Livre De Cabos E Tela Sem Limites - 50cu7700',
            'categoria_id' => 12
        ]);
        $prod8 = Produto::create([
            'nome' => 'Fire TV Stick Lite',
            'valor' => 249.00,
            'foto' => 'images/fire-tv-stick-lite-amazon-2-geracao.jpg',
            'descricao' => 'Fire TV Stick Lite (2ª Geração) Full HD, com Controle Remoto por Voz com Alexa, Preto - B091G767YB',
            'categoria_id' => 12
        ]);
        $prod9 = Produto::create([
            'nome' => 'Controle Sony DualSense PS5',
            'valor' => 375.06,
            'foto' => 'images/controle-sem-fio-dualsense-midnight-black-ps5.jpg',
            'descricao' => 'Controle Sony DualSense PS5, Sem Fio, Midnight Black - 3006452',
            'categoria_id' => 5
        ]);
        $prod10 = Produto::create([
            'nome' => 'Mouse Gamer Logitech G203',
            'valor' => 139.90,
            'foto' => 'images/mouse-gamer-logitech-g203.jpg',
            'descricao' => 'Mouse Gamer Logitech G203 LIGHTSYNC RGB, Efeito de Ondas de Cores, 6 Botões Programáveis e Até 8.000 DPI, Preto - 910-005793',
            'categoria_id' => 7
        ]);
        $prod11 = Produto::create([
            'nome' => 'Headset Gamer Redragon Zeus X',
            'valor' => 249.99,
            'foto' => 'images/headset-gamer-redragon-zeus-chroma.jpg',
            'descricao' => 'Headset Gamer Redragon Zeus X, Chroma Mk.II, RGB, Surround 7.1, USB, Drivers 53MM, Preto/Vermelho - H510-RGB',
            'categoria_id' => 8
        ]);
        $prod12 = Produto::create([
            'nome' => 'Teclado Magnético Gamer Redragon Kumara Pro',
            'valor' => 259.99,
            'foto' => 'images/teclado-gamer-redragon-kumara-pro.jpg',
            'descricao' => 'Teclado Magnético Gamer Redragon Kumara Pro, Anti-Ghosting, RGB, Switch Brown, ABNT2, Preto - K552RGB-PRO (PT-BROWN)',
            'categoria_id' => 6
        ]);
        $prod13 = Produto::create([
            'nome' => 'Cabo Adaptador Conversor',
            'valor' => 23.99,
            'foto' => 'images/cabo-adaptador-conversor.jpg',
            'descricao' => 'Cabo Adaptador Conversor HDMI para VGA F + Áudio F3 - JC- AD-HM/VGA',
            'categoria_id' => 13
        ]);
        $prod14 = Produto::create([
            'nome' => 'Cabo de Energia',
            'valor' => 22.90,
            'foto' => 'images/cabo-de-forca.jpg',
            'descricao' => 'Cabo de Energia para Computador MD9, 1.5 Metros - 7131',
            'categoria_id' => 13
        ]);
        $prod15 = Produto::create([
            'nome' => 'Cabo HDMI',
            'valor' => 14.99,
            'foto' => 'images/cabo-md9-hdmi.jpg',
            'descricao' => 'Cabo HDMI 1.4 MD9, 1.5 Metros - 6334',
            'categoria_id' => 13
        ]);
        $prod16 = Produto::create([
            'nome' => 'HUB USB',
            'valor' => 24.49,
            'foto' => 'images/mini-hub-usb.jpg',
            'descricao' => 'HUB USB 2.0 Bright, 4 Portas, Preto - 59',
            'categoria_id' => 13
        ]);
        $prod17 = Produto::create([
            'nome' => 'Gabinete Gamer Rise Mode',
            'valor' => 249.90,
            'foto' => 'images/gabinete-gamer-rise-mode-glass.jpg',
            'descricao' => 'Gabinete Gamer Rise Mode Glass 06x, Mid Tower, ARGB, ATX, Lateral e Frente em Vidro, 6x Fans, Branco - RM-CA-06XW-ARGB',
            'categoria_id' => 10
        ]);
        $prod18 = Produto::create([
            'nome' => 'Caixa De Som Multimídia',
            'valor' => 22.90,
            'foto' => 'images/Caixa-De-Som-Multim-dia-USB.jpg',
            'descricao' => 'Caixa De Som Multimídia, USB, P2, Alto Falante de 2 Polegadas, 6W',
            'categoria_id' => 21
        ]);
        $prod19 = Produto::create([
            'nome' => 'Memória RAM Kingston 8gb',
            'valor' => 184.99,
            'foto' => 'images/memoria-kingston-fury-beast-8gb-ddr4.jpg',
            'descricao' => 'Memória RAM Kingston Fury Beast, 8GB, 3200MHz, DDR4, CL16, Preto - KF432C16BB/8',
            'categoria_id' => 15
        ]);
        $prod20 = Produto::create([
            'nome' => 'Memória RAM Kingston 16gb',
            'valor' => 329.99,
            'foto' => 'images/memoria-kingston-fury-beast-rgb-16gb-ddr4.jpg',
            'descricao' => 'Memória RAM Kingston Fury Beast, RGB, 16GB, 3200MHz, DDR4, CL16, Preto - KF432C16BB12A/16',
            'categoria_id' => 15
        ]);
        $prod21 = Produto::create([
            'nome' => 'HD Externo Portátil 1TB',
            'valor' => 389.99,
            'foto' => 'images/hd-externo-portatil-1tb-seagate.jpg',
            'descricao' => 'HD Externo Portátil 1TB Seagate, USB 3.0 - STGX1000400',
            'categoria_id' => 20
        ]);
        $prod22 = Produto::create([
            'nome' => 'HD Seagate 2TB',
            'valor' => 409.99,
            'foto' => 'images/hd-seagate-2tb.jpg',
            'descricao' => 'HD Seagate 2TB BarraCuda, 3.5, SATA - ST2000DM008',
            'categoria_id' => 20
        ]);
        $prod23 = Produto::create([
            'nome' => 'SSD 500GB Kingston',
            'valor' => 299.99,
            'foto' => 'images/ssd-kingston-nv2-500-gb.jpg',
            'descricao' => 'SSD 500 GB Kingston NV2, M.2 2280 PCIe, NVMe, Leitura: 3500 MB/s e Gravação: 2100 MB/s - SNV2S/500G',
            'categoria_id' => 20
        ]);
        $prod24 = Produto::create([
            'nome' => 'SSD 1TB Kingston',
            'valor' => 459.99,
            'foto' => 'images/ssd-kingston-nv2-1-tb.jpg',
            'descricao' => 'SSD 1 TB Kingston NV2, M.2 2280 PCIe, NVMe, Leitura: 3500 MB/s e Gravação: 2100 MB/s - SNV2S/1000G',
            'categoria_id' => 20
        ]);
        $prod25 = Produto::create([
            'nome' => 'Water Cooler Rise Mode',
            'valor' => 349.99,
            'foto' => 'images/water-cooler-gamer-rise-mode.jpg',
            'descricao' => 'Water Cooler Rise Mode, ARGB, 240mm, AMD/Intel, Preto - RM-WCB-04-ARGB',
            'categoria_id' => 14
        ]);
        $prod26 = Produto::create([
            'nome' => 'Kit Com 3 Ventoinhas Rise Mode Energy',
            'valor' => 119.99,
            'foto' => 'images/cooler-fan-rise-mode-energy-3-unidades.jpg',
            'descricao' => 'Kit Com 3 Ventoinhas Rise Mode Energy, 120mm, ARGB, Preto - FN-02-RGB-5V',
            'categoria_id' => 14
        ]);
        $prod27 = Produto::create([
            'nome' => 'Ventoinha Rise Mode',
            'valor' => 119.99,
            'foto' => 'images/cooler-fan-rise-mode-black.jpg',
            'descricao' => 'Ventoinha Rise Mode, 120mm, Preto - RM-BK-01-FB',
            'categoria_id' => 14
        ]);
        $prod28 = Produto::create([
            'nome' => 'Pasta Térmica Rise Mode',
            'valor' => 9.49,
            'foto' => 'images/pasta-termica-rise-mode.jpg',
            'descricao' => 'Pasta Térmica Rise Mode Silver Cold, 5g, Cinza - RM-TG-01-CLD',
            'categoria_id' => 1
        ]);
        $prod29 = Produto::create([
            'nome' => 'Placa de Vídeo RTX 4060',
            'valor' => 2329.99,
            'foto' => 'images/placa-de-video-rtx-4060.jpg',
            'descricao' => 'Placa de Vídeo RTX 4060 O8G V2 Gaming ATS ASUS NVIDIA GeForce, 8GB GDDR6, DLSS, Ray Tracing, G-Sync - 90YV0JM2-M0NA00',
            'categoria_id' => 17
        ]);
        $prod30 = Produto::create([
            'nome' => 'Placa de Vídeo RX 7600',
            'valor' => 1899.99,
            'foto' => 'images/placa-de-video-rx-7600.jpg',
            'descricao' => 'Placa de Vídeo RX 7600 GAMING OC 8G AMD Radeon Gigabyte, 8GB GDDR6, 128bits, RGB - GV-R76GAMING OC-8GD',
            'categoria_id' => 17
        ]);
        $prod31 = Produto::create([
            'nome' => 'Placa Mãe MSI B450M',
            'valor' => 489.99,
            'foto' => 'images/placa-mae-msi-b450m.jpg',
            'descricao' => 'Placa Mãe MSI B450M-A Pro Max, AMD AM4, Micro-ATX, DDR4',
            'categoria_id' => 18
        ]);
        $prod32 = Produto::create([
            'nome' => 'Placa Mãe Gigabyte B550M',
            'valor' => 839.99,
            'foto' => 'images/placa-mae-gigabyte-b550m.jpg',
            'descricao' => 'Placa Mãe Gigabyte B550M Aorus Elite (rev. 1.3), AMD AM4, Micro ATX, DDR4 - B550M AORUS ELITE',
            'categoria_id' => 18
        ]);
        $prod33 = Produto::create([
            'nome' => 'Processador AMD Ryzen 7',
            'valor' => 1399.99,
            'foto' => 'images/processador-amd-ryzen-7-5700x3d.jpg',
            'descricao' => 'Processador AMD Ryzen 7 5700X3D, 3.6 GHz, (4.1GHz Max Turbo), Cachê 4MB, 8 Núcleos, 16 Threads, AM4 - 100-100001503WOF',
            'categoria_id' => 19
        ]);
        $prod34 = Produto::create([
            'nome' => 'Processador Intel Core i5',
            'valor' => 695.99,
            'foto' => 'images/processador-intel-core-i5-12400f.jpg',
            'descricao' => 'Processador Intel Core i5-12400F, 2.5GHz (4.4GHz Max Turbo), Cache 18MB, LGA 1700 - BX8071512400F',
            'categoria_id' => 19
        ]);
        $prod35 = Produto::create([
            'nome' => 'Processador Intel Core i7',
            'valor' => 2109.99,
            'foto' => 'images/processador-intel-core-i7-12700k.jpg',
            'descricao' => 'Processador Intel Core i7-12700K, 3.6GHz (5.0GHz Max Turbo), 12 Núcleos, 20 Threads, LGA 1700, Vídeo Integrado - BX8071512700K',
            'categoria_id' => 19
        ]);
        $prod36 = Produto::create([
            'nome' => 'Fonte Corsair CV550',
            'valor' => 349.99,
            'foto' => 'images/fonte-corsair-cv550.jpg',
            'descricao' => 'Fonte Corsair CV550, 550W, 80 Plus Bronze, PFC Ativo, com cabo, Preto - CP-9020210-',
            'categoria_id' => 16
        ]);
        $prod37 = Produto::create([
            'nome' => 'Fonte MSI MAG A850GL',
            'valor' => 624.99,
            'foto' => 'images/fonte-msi-mag-a850gl.jpg',
            'descricao' => 'Fonte MSI MAG A850GL, 850W, 80 Plus Gold, Modular, PFC Ativo, com cabo, Preto',
            'categoria_id' => 16
        ]);
        $prod38 = Produto::create([
            'nome' => 'PC Gamer Completo RGB',
            'valor' => 1736.10,
            'foto' => 'images/PC-Gamer-Completo-RGB-Intel-Core-i7.jpg',
            'descricao' => 'PC Gamer Completo RGB Intel Core i7, 16GB RAM, SSD 512GB, Placa de vídeo Geforce 4GB, Fonte 500W, Monitor LED 19.5" 75Hz, Windows 10 - 3green Play 3GP-056',
            'categoria_id' => 3
        ]);
        $prod39 = Produto::create([
            'nome' => 'Computador Completo 3green',
            'valor' => 899.10,
            'foto' => 'images/pc-completo-i5.jpg',
            'descricao' => 'Computador Completo 3green,Intel Core i5 3.40Ghz, 4 núcleos e 4 threads, 8GB RAM, 256GB SSD, Monitor LED 19.5" - Windows 10',
            'categoria_id' => 3
        ]);
        $prod40 = Produto::create([
            'nome' => 'Notebook Asus Vivobook',
            'valor' => 1694.94,
            'foto' => 'images/Notebook-Asus-Vivobook.jpg',
            'descricao' => 'Notebook Asus Vivobook Go E1504ga, Intel Core I3 N305, 4GB, SSD 256GB, Linux, Tela 15.6" Fhd, Silver - Nj447',
            'categoria_id' => 3
        ]);
        $prod41 = Produto::create([
            'nome' => 'Notebook Lenovo IdeaPad',
            'valor' => 3779.99,
            'foto' => 'images/notebook-gamer-lenovo-ideapad.jpg',
            'descricao' => 'Notebook Lenovo IdeaPad 1i Core i7-1255U, 12GB RAM, SSD 512GB, Intel Iris Xe, 15.6", Windows 11, Cinza - 82VY000PBR',
            'categoria_id' => 3
        ]);
        $prod42 = Produto::create([
            'nome' => 'Impressora Multifuncional Epson',
            'valor' => 1028.99,
            'foto' => 'images/impressora-epson.jpg',
            'descricao' => 'Impressora Multifuncional Epson EcoTank L3250, Colorida, Wifi, Wireless, USB, Bivolt, Preta - C11CJ67303',
            'categoria_id' => 3
        ]);
        $prod43 = Produto::create([
            'nome' => 'Controle Microsoft Xbox',
            'valor' => 379.90,
            'foto' => 'images/Controle-Microsoft-Xbox-Carbon-Black-Sem-Fio.jpg',
            'descricao' => 'Controle Microsoft Xbox Carbon Black, Sem Fio, Para Xbox Series X e S, Preto - Qat-00007',
            'categoria_id' => 5
        ]);
        $prod44 = Produto::create([
            'nome' => 'Console Microsoft Xbox Series S',
            'valor' => 2882.07,
            'foto' => 'images/Console-Microsoft-Xbox-Series-S.jpg',
            'descricao' => 'Console Microsoft Xbox Series S, 512GB, Branco - RRS-00006',
            'categoria_id' => 5
        ]);
        $prod45 = Produto::create([
            'nome' => 'Console Nintendo Switch',
            'valor' => 2099.90,
            'foto' => 'images/console-nintendo-switch-joy.jpg',
            'descricao' => 'Console Nintendo Switch + Joy-Con Neon + Mario Kart 8 Deluxe + 3 Meses de Assinatura Nintendo Switch Online, Azul e Vermelho - HBDSKABL2',
            'categoria_id' => 5
        ]);
        $prod46 = Produto::create([
            'nome' => 'Caixa de Som Portátil JBL',
            'valor' => 169.99,
            'foto' => 'images/caixa-de-som-portatil-jbl.jpg',
            'descricao' => 'Caixa de Som Portátil JBL Go Essential, Bluetooth, À Prova Dágua, Preto - JBLGOESBLK',
            'categoria_id' => 21
        ]);
        $prod47 = Produto::create([
            'nome' => 'Cartão de Memória Kingston',
            'valor' => 62.99,
            'foto' => 'images/cartao-de-memoria-kingston-microsd-128gb.jpg',
            'descricao' => 'Cartão de Memória Kingston Canvas Select Plus MicroSD 128GB, com Adaptador, para Câmeras Automáticas/Dispositivos Android - SDCS2/128GB',
            'categoria_id' => 1
        ]);
        $prod48 = Produto::create([
            'nome' => 'Pilha Alcalina AA Duracell',
            'valor' => 74.90,
            'foto' => 'images/Pilha Alcalina AA Duracell.jpg',
            'descricao' => 'Pilha Alcalina, Aa, Pequena, Duracell, Com 16 Unidades',
            'categoria_id' => 1
        ]);
        $prod49 = Produto::create([
            'nome' => 'Pen Drive Multi',
            'valor' => 16.99,
            'foto' => 'images/Pen Drive Multi.jpg',
            'descricao' => 'Pen Drive Multi Twist USB 2.0 8GB - PD587',
            'categoria_id' => 1
        ]);
        $prod50 = Produto::create([
            'nome' => 'Teclado e Mouse Sem Fio Dell',
            'valor' => 109.99,
            'foto' => 'images/teclado-e-mouse-sem-fio-dell.jpg',
            'descricao' => 'Teclado e Mouse Sem Fio Dell KM3322W, USB, ABNT2, Preto - 580-BBBB',
            'categoria_id' => 9
        ]);
        $prod51 = Produto::create([
            'nome' => 'Mouse sem fio Logitech M280',
            'valor' => 85.99,
            'foto' => 'images/Mouse sem fio Logitech M280.jpg',
            'descricao' => 'Mouse sem fio Logitech M280 com Conexão USB e Pilha Inclusa, Preto - 910-004284',
            'categoria_id' => 7
        ]);
        $prod52 = Produto::create([
            'nome' => 'Caixa Som Knup',
            'valor' => 69.43,
            'foto' => 'images/Caixa-Som-Knup.jpg',
            'descricao' => 'Caixa Som Knup, Caixinha PC, Computador, Notebook, Potente, LED, RGB, P2',
            'categoria_id' => 21
        ]);
    }
}
