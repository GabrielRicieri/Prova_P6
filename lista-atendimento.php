<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body> <h4>Listagem de atendimentos</h4> <br>
        <table class="blueTable">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Atividade</td>
                <td>Registro</td>
                <td>Atendimento</td>
                <td>Status</td>
                <td>Ações</td>
            </tr>
            <?php
            include("conexao.php");
            $query = mysqli_query($conexao, "SELECT * FROM atendimentos");

            while ($result = mysqli_fetch_array($query)) {


            ?>

                <div class="container">
                    <form action="change-atendiemento.php" method="POST">
                        <?= "<input type='hidden' name='ID' value='" . $result['ID'] . "'>"; ?>
                        <tr>
                            <td><?= $result["ID"]; ?></td>
                            <td><?= $result["NOME"]; ?></td>
                            <td><?= $result["TELEFONE"]; ?></td>
                            <td><?= $result["ATIVIDADE"]; ?></td>
                            <td> <?php if ($result["REGISTRO"] != '') echo (new DateTime($result["REGISTRO"]))->format('d/m/Y H:i:s'); ?></td>
                            <td>
                                <?php if ($result["ATENDIMENTO"] != '') echo (new DateTime($result["ATENDIMENTO"]))->format('d/m/Y H:i:s'); ?>
                            </td>
                            <td><?= $result["STATUS"]; ?></td>
                            <td>
                                <?php
                                if ($result["STATUS"] == "espera") {
                                    echo " <button type='submit' name='btn' value='atender' class='botao'>Atender</button>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($result["STATUS"] == "espera") {
                                    echo "<button type='submit' name='btn' value='cancelar' class='botao'>Cancelar</button>";
                                }
                                ?>
                            </td>
                        </tr>
                    </form>
                </div>
            <?php } ?>

        </table>

    </div>
</body>

</html>