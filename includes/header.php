<?php 

    function getDentista(){
        $url = "http://localhost:56447/api/dentista";
        $json = file_get_contents( $url );
        $dados =json_decode ($json, false );
        $dados =json_decode ($dados, false );
        return $dados;
    }

    $dentista = getDentista();

?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <header class="main-header">
       
        <h1 class="main-header-title">
        <a href="index.php" class="main-header-link">
            <img src="images/dentista.png" alt="Logo do site, com uma pasta de dentes e uma escova cruzadas">
        </a>
            <strong> Nome do Dentista: <?php echo $dentista[0]->ANome_dentista; ?></strong>
        </h1>
            <p class="main-header-paragraph">Profissional com 20 anos de experiência, mestrado em Ciências Odontológicas na USP, duas especializações
                 em Implantodontia e Dentística e Pós-Graduação em Cosmetic Dentistry Oral Rehabilitation pela NYU.</p>
            <p class="main-header-paragraph">CRM: <?php echo $dentista[0]->ACrm;?></p>
        </header>