<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icone.png" type="image/x-icon">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-header.css">
    <link rel="stylesheet" href="../assets/css/style-profile.css">
</head>

<body>
    <?php include '../include/header.php' ?>

    <div class="container-page position-absolute top-50 start-50 translate-middle corpo">
        <div>
            <h3>Informações do usuário</h3>
        </div>
        <form action="">
            <div id="form-grid">
                <div>
                    <label for="nome">Nome do usuário</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                    <label for="emnail">Email do usuário</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="senha">Trocar senha</label>
                    <input type="password" name="senha" id="senha">
                </div>

                <div>
                    <label for="imagem">Selecionar foto de perfil  </label> 
                    <input type="file" name="imagem" id="imagem" class="input-img">
                </div>

                <div>
                    <label for="localizacao">Localização</label>
                    <input type="text" name="localizacao" id="localizacao">
                </div>

                <div>
                    <label for="tel">Telefone</label>
                    <input type="text" name="tel" id="tel">
                </div>

                <div>
                    <h5>Descrição do Usuário</h5>
                    <textarea name="desc" id="desc" cols="50" rows="4"></textarea>
                </div>
            </div>
        </form>

        <div id="corpo">
            <h2></h2>
        </div>
    </div>
</body>

</html>