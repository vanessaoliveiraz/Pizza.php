<?php

    $sub = 0;

    foreach($_SESSION['carrinho'] as $key => $value){
        $sub += $value['preco'] * $value ['quantidade'];
    }

    echo '<div class="subtotal">';
    echo '<h1>Valor Total: </h1>';

    echo 'R$'. number_format($sub,2,',',);