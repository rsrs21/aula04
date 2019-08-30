
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/708adf11dc.js"></script>
  </body>
</html> 
  

<?php include './header.php' ?>
    <h1>LISTAR</h1>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estrutura de array -->
                <?php
                    $lista = array(
                        array(
                            "id" => 1,
                            "nome" => "Pizza a Moda da Casa",
                            "quantidade" => "100 un.",
                            "preco" => 20.00,
                            "imagem" => "prod1"
                        ),
                        array(
                            "id" => 2,
                            "nome" => "Pizza Siciliana",
                            "quantidade" => "250 un.",
                            "preco" => 30.00,
                            "imagem" => "prod2"
                        ),
                        array(
                            "id" => 3,
                            "nome" => "Pizza Portuguesa",
                            "quantidade" => "132 un.",
                            "preco" => 35.00,
                            "imagem" => "prod3"
                        )
                    );

                  $array = array(
                    "id" => 4,
                    "nome" => "Pizza Margarita",
                    "quantidade" => "62 un.",
                    "preco" => 35.00,
                    "imagem" => "prod4"
                  );

                  # insere o elemento em uma posição do array
                  array_push($lista, $array);

                ?>
                <!-- Estruturas de repetição -->
                <?php for($i = 0; $i < sizeof($lista); $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $lista[$i]['nome'] ?></td>
                    <td><?= $lista[$i]['quantidade'] ?></td>
                    <td><?= $lista[$i]['preco'] ?></td>
                    <td><a href="<?= $lista[$i]['imagem'] ?>"><i class="fas fa-camera-retro"></i></a></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>