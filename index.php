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
            <a href="cadastro.php" class="button-default-add btn btn-outline-dark col-lg-10"><i class="fas fa-plus"></i> Novo Paciente</a>
                 <?php
                    function getPacientes (){
                        $url = "http://localhost:56447/api/pacientes";
                        $json = file_get_contents( $url );
                        $dados =json_decode ($json, false );
                        $aux= "";
                            for ($i=0; $i< count($dados) ; $i++)
                                 {
                                    $dados[$i] =  json_decode($dados[$i], false);                
                                        $aux.= 
                                            "<tr>
                                                <td> ".$dados[$i]->ANome."</td>
                                                <td>".$dados[$i]->ASexo."</td>
                                                <td>".$dados[$i]->AIdade."</td>     
                                                <td class='td-buttons'>
                                                    <a href='atualizar.php?C=".$dados[$i]->ACod_paciente."' class='button-default-edit btn btn-outline-secondary'><i class='fas fa-pencil-alt'></i> Editar</a>
                                                        <br>
                                                    <a href='includes/delete.php?Del=".$dados[$i]->ACod_paciente."' class='button-default-remove btn btn-outline-danger'><i class='fas fa-trash'></i> Excluir</a>
                                                </td>
                                            </tr>  ";
                                 }
                                 return $aux;
                    }
                ?>
                        
            <section class="col-lg-10">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-4">Nome</th>
                                <th class="col-4">Sexo</th>
                                <th class="col-4">Idade</th>
                                <th class="col-4">Alterar/Excluir</th>
                            </tr>
                        </thead>
                        <tbody class="col-8">
                            <?php
                                echo getPacientes ();
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
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
                    