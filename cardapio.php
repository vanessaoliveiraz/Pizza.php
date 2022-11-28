<?php session_start(); ?>

<html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
  <title>Cardápio</title>
  <?php include('estilos.php'); ?>
</head>

</html>

<body>
  <?php include('header.php'); ?>
  <section class="menu" id="menu">
    <h1>CARDAPIO</h1>

    <?php

    $items = array(
      ['nome' => 'Pizza Sabor (Queijo com Catupiry)', 'img' => 'img/faizan-saeed-mwYTNZO0WhA-unsplash.jpg', 'preco' => '50.0'],
      ['nome' => 'Pizza Sabor (Portuguesa)', 'img' => 'img/jonas-kakaroto-zlKdLdMREtE-unsplash.jpg', 'preco' => '20.00'],
      ['nome' => 'Pizza Sabor (Quatro Queijos)', 'img' => 'img/thomas-tucker-MNtag_eXMKw-unsplash.jpg', 'preco' => '30.00'],
      ['nome' => 'Pizza Sabor (Calabresa)', 'img' => 'img/wesual-click-jkC1ul95ujQ-unsplash.jpg', 'preco' => '40.00'],
      ['nome' => 'Pizza Sabor (Bacon)', 'img' => 'img/food-photographer-Xt84tIHbjRY-unsplash.jpg', 'preco' => '60.00'],
      ['nome' => 'Pizza Sabor (Azeitona e Linguiça)', 'img' => 'img/fernando-andrade-_P76trHTWDE-unsplash.jpg', 'preco' => '20.00'],

    );
    echo '<h1>NOSSOS SABORES</h1>';
    echo '<div class="lista-item">';
    echo '<table>
    <tr>
    <td>Pizza Calabresa <hr></td>
    <td>Pizza Portuguesa <hr></td>
    <td>Pizza Quatro Queijos <hr></td>
      <th>Pizzas</th>
    <td> Pizza Queijo Catupiry <hr></td>
    <td>Pizza Bacon Catupiry <hr> </td>
    <td>Pizza Azeitona Linguiça <hr> </td>
  </tr>';
    echo '<table>';
    echo '</div>';

    foreach ($items as $key => $value) {
    ?>

      <div class="box-container">
        <div class="image">
          <img src="<?php echo $value['img'] ?>" />
          <a href="?adicionar=<?php echo $key ?>">Adicionar ao Carrinho!</a>
        </div>
      </div>
    <?php
    }
    ?>
    <h3>Carrinho:</h3>

    <?php
    if (isset($_GET['adicionar'])) {
      // vamos adicionar ao carrinho
      $idProduto = (int) $_GET['adicionar'];
      if (isset($items[$idProduto])) {
        if (isset($_SESSION['carrinho'][$idProduto])) {
          $_SESSION['carrinho'][$idProduto]['quantidade']++;
        } else {
          $_SESSION['carrinho'][$idProduto] = array(
            'quantidade' => 1,
            'nome' => $items[$idProduto]['nome'],
            'preco' => $items[$idProduto]['preco']
          );
        }
        echo '<script type="text/javascript">sweetAlert("Pedido feito com Sucesso!", "Item adicionado ao Carrinho :D", "success");</script>';
      } else {
        die('Voce nao pode adicionar um item que nao existe.');
      }
    }
    ?>

    <?php include('carrinho.php'); ?>

    <?php include('subtotal.php'); ?>



</body>
</section>