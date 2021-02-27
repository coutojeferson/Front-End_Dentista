<?php
        $id = $_GET['Del'];
        
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'DELETE',                    
                'header' => "Connection: close\r\n"
                            
            )
        ));
        // Realize comunicação com o servidor
        $contents = file_get_contents("http://localhost:56447/api/PacientesDel/$id", null , $context);          
        $resposta =$contents;  
        

        if($resposta == true): // Foi possível realizar a query?
            echo  "<script>alert('Paciente deletado com sucesso!');</script>";
            echo  "<script>window.location='../index.php';</script>";
            // header ('Location: ../index.php?sucesso');
        else:
            echo  "<script>alert('Não foi possível deletar!');</script>";
            echo  "<script>window.location='../index.php';</script>";
            // header ('Location: ../index.php?erro');       
        endif;
    
