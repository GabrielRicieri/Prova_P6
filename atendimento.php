<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br><br>
    <title>Formulário HTML</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background-color = "gray">
    
    <h1>Agencia de serviço Publico</h1>
    <div width=20% align=center>
    <form action="cadastro-atendimento.php" method="POST" class="formulario" method="post" action="mensagens.php" align=left> 
        <p> Envie uma mensagem preenchendo o formulário abaixo</p>
            <div class="row">
                <div class="col-4">
                    <label for="NOME">Nome*</label>
                    <div class="campo">
                        <input type="text" name="NOME">
                    </div>
                </div>
                <div class="col-4">
                    <div class="campo">
                        <label for="TELEFONE">Telefone *</label>
                        <input type="tel" name="TELEFONE">
                    </div>
                </div>
                <div class="col-4">
                    <div class="campo">
                        <label for="ATIVIDADE">Atividade*</label>
                        <select name="ATIVIDADE" id="ATIVIDADE">
                            <option value="Segunda Via de Conta">Segunda Via de Conta</option>
                            <option value="Mudança de Endereço">Mudança de Endereço</option>
                            <option value="Suspensão do Serviço">Suspensão do Serviço</option>
                            <option value="Negociação de Débitos">Negociação de Débitos</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="botao"> Cadastrar </button>
            <a href="./lista-atendimento.php"><button type= "button" class="botao"> Listar atendimento </button></a>
        </form>


        <br><br><br>


    </div>




</body>

</html>