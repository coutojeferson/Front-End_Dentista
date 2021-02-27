<?php

    if (isset($_POST['btn-cadastrar'])):    

        $data = array(
            'ACod_paciente' => -1,
            'ACod_dentista' => 1,
            'ANome'  => "".$_POST['nome']."", 
            'ASexo'  => "". $_POST['sexo']."", 
            'AIdade'  => "".$_POST['idade'].""
            // 'ANome_livro'  => "".$_POST['titulo']."",
            // 'AAutor'  => "".$_POST['autor'].""
        );

        $content = json_encode($data);
  
        
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',                    
                'header' => "Connection: close\r\n".
                                "Content-type: application/json\r\n".
                                "Content-Length: ".strlen($content)."\r\n",
                'content' => $content                                
            )
        ));
        // Realize comunicação com o servidor
        $contents = file_get_contents("http://localhost:56447/api/SetPacientesJson", $content, $context);          
        $resposta =$contents;  


        if($resposta == true): // Foi possível realizar a query?
            echo  "<script>alert('Paciente cadastrado com sucesso!');</script>";
            echo  "<script>window.location='../index.php';</script>";
            // header ('Location: ../index.php?sucesso');
        else:
            echo  "<script>alert('Não foi possível cadastrar!');</script>";
            echo  "<script>window.location='../index.php';</script>";
            // header ('Location: ../index.php?erro');       
        endif;
    

    endif;








