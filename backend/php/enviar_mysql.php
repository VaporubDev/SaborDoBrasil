<?php

// Como enviar com o PHP dados para o mysql data?

// Dados movidos para o mysql/data/

// Depois de __DIR__ sempre coloque 
$caminhoPastaOrigem = __DIR__ . '/../SQL/arquivos_CSV/';
$caminhoPastaDestino = 'C://xampp/mysql/data/sabor_brasil/';

// Verifica se é uma pasta
if(is_dir($caminhoPastaOrigem)){
    // echo 'É uma pasta';
    // Verifica se consegue abrir
    if($manipular = opendir($caminhoPastaOrigem)){

        while(false !== ($arquivo = readdir($manipular))){
            // Ignora os diretórios . e ..
            if($arquivo !== '.' && $arquivo !== '..'){
                $arquivoOrigem = $caminhoPastaOrigem . $arquivo;
                $arquivoDestino = $caminhoPastaDestino . $arquivo;
    
                if(rename($arquivoOrigem, $arquivoDestino)){
                    echo "Arquivo $arquivo movido com sucesso para $arquivoDestino";
                } 
                else{
                    echo "Não foi possível mover o arquivo";
                }
            }

        }
    }
} else{
    echo 'Não é uma pasta';
}



// move_uploaded_file();