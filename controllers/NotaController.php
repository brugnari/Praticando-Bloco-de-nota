<?php 
include_once __DIR__ .'/../config/BaseURL.php'; 
include_once __DIR__ .'/../config/conn.php'; 

    $acao = isset($_GET['acao']) ? $_GET['acao'] : '';
    $data = date('d/m/Y H:i:s');
    switch ($acao) 
    {
        case 'adicinar':
            $titulo = $acao['titulo'];
            $conteudo = $acao['conteudo'];
            $stmt =$conn->prepare("INSERT INTO notas(data,titulo,conteudo) VALUES(?,?,?)");
            $stmt->execute([$data,$titulo,$conteudo]);
            break;

        case 'buscar':
            # code...
            break;

        case '':
            
            break;
        
        default:
            # code...
            break;
    }

    function ListarNotas($conn){
        $stmt = $conn->query("SELECT * FROM notas ORDER BY DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
