<?php
require_once "../../html/header.php";
require_once "../../html/buttons.php";
?>

<?php
// vamos criar uma variável para especificar qual tipo de venda
$tipo_de_venda = 'servico';

// se o tipo de venda é servico...
if ($tipo_de_venda == 'servico') {
    require "./factory/VendaServicoFactory.php";

    $fabrica = new VendaServicoFactory('Beto');


} elseif ($tipo_de_venda == 'produto') {
    require "./factory/VendaProdutoFactory.php";

    $fabrica = new VendaProdutoFactory(1000);

} else {
    echo "Venda inexistente"; 
    exit();
}

$venda = $fabrica->criarVenda();
$imposto = $fabrica->buscarImposto();

var_dump($venda); echo "<hr>";
var_dump($imposto);

require_once "../../html/footer.php";