<?php 
include_once __DIR__ .'/../config/BaseURL.php'; 
include_once __DIR__ .'/../config/conn.php'; 

    $acao = isset($_GET['acao']) ? $_GET['acao'] : '';
    $data = date('Y-m-d H:i:s');
    switch ($acao) 
    {
        case 'adicionar':
            $titulo = $_POST['titulo'];
            $conteudo = $_POST['conteudo'];
            $stmt =$conn->prepare("INSERT INTO notas(data_criacao,titulo,conteudo) VALUES(?,?,?)");
            $stmt->execute([$data,$titulo,$conteudo]);
            header("Location:../index.php");
            exit;

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
        $stmt = $conn->query("SELECT * FROM notas ORDER BY data_criacao DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
