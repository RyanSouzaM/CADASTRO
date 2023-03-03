<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="continer mt-5 ms-5">
        <div class="header-title mt-2">
        <h1>Cadastro novo usuário</h1>
        </div>
        
        <div class="col">
            <div class="row">
                <div class="col-md-4 ml-auto">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group mt-1 ">
                            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome">
                        </div>
                        <div class="form-group mt-1">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-1">
                            <input type="number" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="mt-3">
                        </div>
                        <p class="small mt-3">
                        </p>
                    </form>
                </div>
                <div class="col">
                    <div class="continer">
                        <div class="row">
                            <div class="col-md-6 ml-auto">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="form-group mt-1">
                                        <input type="password" name="email" class="form-control" placeholder="Confirmar Senha">
                                    </div>
                                    <div class="mt-1">
                                        <select class="form-select">
                                            <option selected>Selecione uma pergunta de segurança</option>
                                            <option >Qual estação do ano você nasceu</option>
                                            <option >Qual numero de telefone antigo</option>
                                            <option >Qual o nome do seu PET de extimação</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-1">
                                        <input type="text" name="resposta" class="form-control" placeholder="Resposta">
                                    </div>
                                    <div class=" col-md-5 mt-3">
                                        <button type="submit" class="btn btn-primary w-100">Cadastr-se agora!</button>
                                    </div>
                                    <p class="small mt-3">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>