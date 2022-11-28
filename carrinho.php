<?php
  foreach ($_SESSION['carrinho'] as $key => $value){
  // NOME
  // QUANTIDADE
  // PRECO
    echo '<div class="carrinho-item">';
    echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: R$'.($value['quantidade']*$value['preco']).',00</p>';
    echo '</div>';
  
  }
?>