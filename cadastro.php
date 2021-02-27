<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Dentista</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/f846873243.js" crossorigin="anonymous"></script>
</head>
   
<div class="container">
    <?php 
            include "includes/header.php";
    ?>
    <body> 
        <div class="row">
             <h1 class="main-content-section-title text-align-center">Cadastrar</h1>

        </div>
            <section>
                
                <div> 
                    <form id="form" action="includes/insert.php" method="POST">
                        <div class="row">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o seu nome">
                            <p id="legenda_nome" class="erro_legenda"></p>
                        </div>
                        <div class="row py-3">
                            <label for="sexo">Sexo</label>
                            <input class="form-control" type="text" name="sexo" id="sexo" placeholder="Digite o seu sexo">
                            <p id="legenda_sexo" class="erro_legenda"></p>
                        </div>
                        <div class="row">
                            <label for="idade">Idade</label>
                            <input class="form-control" type="text" name="idade" id="idade" placeholder="Digite sua idade">
                            <p id="legenda_idade" class="erro_legenda"></p>
                        </div>
                        <div class="row">
                            <p class="buttons-center mt-5">
                                <input type="submit" class="button-default btn btn-outline-success" name="btn-cadastrar" value="Adicionar">   
                            <a href="index.php" class="button-default-cancel btn btn-outline-danger">Cancelar</a>
                            </p>
                        </div>
                       
                    </form>
                </div>
               
            </section>
        <script src="js/validacao.js"></script>
    </body>
</div>

    <footer class="bg-dark text-white mt-5">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 col-6">
            <h4 class="h6">LOCAIS</h4>
            <ul class="list-unstyled">
              <li><a href="index.php">Av Jacu Pessego km 11</a></li>
              <li><a href="index.php">Av Rodolfo Sampaio n°22</a></li>
              <li><a href="index.php">Rod Bunjiro nakao km 21</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="h6">DADOS DE CONTATO</h4>
            <ul class="list-unstyled text-secondary">
              <li>Escritorio@odontologia.com.br</li>
              <li>21 99999-9999</li>
              <li>De Seg. à Sex. das 8h às 18h</li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4 class="h6">REDES SOCIAIS</h4>
            <ul class="list-unstyled">
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Facebook</a></li>
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Twitter</a></li>
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-primary text-center py-3">
        <p class="mb-0">Odontologia © 2020. Alguns direitos reservados.</p>
      </div>
    </footer>
        
</html>