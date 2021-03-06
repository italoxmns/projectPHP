<?php
session_start();
if(!isset($_SESSION['usuarioLog'])){
    header('location: index.php');
    session_destroy();
}
if(isset($_GET['sair'])){
    session_destroy();
    header('location:index.php');
}
include_once 'public/layout/layout.php';
include_once 'public/layout/menu.php';
include_once 'database/query.php';
include_once 'database/conn.php';
include_once 'modal/aluguel.php';
// seleciona a base de dados em que vamos trabalhar
$select = DBQuery('veiculo',' inner join modelo ON modelo_idmodelo = idmodelo order by ano');

$linha = mysqli_fetch_assoc($select);
// calcula quantos dados retornaram
$total = mysqli_num_rows($select);
?>

<!--        conteudo-->
<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-sm-10 ">
            <div class="row py-2">
                <div class="col-12 text-center py-2">
                    <h5 class="display-4">Controle de veículos </h5>
                </div>
                <div class="col-12 p-1 m-0">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <!-- Table row -->
                                <th scope="col">ID</th>
                                <!-- Table header -->
                                <th scope="col">Modelo</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Lugares</th>
                                <th scope="col">Potencia</th>
                                <th scope="col">Status.</th>
                                <th scope="col">Config.</th>
                            </tr>
                        </thead>
                        <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {

                        ?>

                        <tr >
                            <th scope="col">
                                <?=$linha['idveiculo']?>
                            </th>
                            <!-- Table data -->
                            <td>
                                <?=$linha['modelo']?>
                            </td>
                            <td>
                                <?=$linha['placa']?>
                            </td>
                            <td>
                                <?=$linha['ano']?>
                            </td>
                            <td>
                                <?=$linha['lugares']?>
                            </td>
                            <td>
                                <?=$linha['potencia']?>
                            </td>
                            <td class="text-center">
                                <?php
                            if($linha['status'] == '1'){
                                echo '<i class="fas fa-check-circle fa-lg text-success"></i>';
                            }else{
                                echo '<i class="fas fa-times-circle fa-lg text-danger"></i>';
                            }
                                ?>
                            </td>
                            <td>
                                <a class="btn rounded" href="" id="option" data-toggle="modal" data-target="#update">
                                <i class="fas fa-edit fa-md"></i>
                                </a>
                                <a class="btn rounded" href="" id="option" data-toggle="modal" data-target="#delete">
                                    <i class="fas fa-trash fa-md"></i>
                                </a>
                            </td>
                        </tr>

                        <?php
                                // finaliza o loop que vai mostrar os dados
                            }while($linha = mysqli_fetch_assoc($select));
                            // fim do if 
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>