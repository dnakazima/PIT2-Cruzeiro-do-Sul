
<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
 
<body>
    <section class="position-absolute top-50 start-50 translate-middle d-block p-2 text-bg-primary rounded">
        <div class="">
            <div class="">
                <div class="">
                    <h3 class="">Sistema de Login</h3>
                    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="">
                        <form action="session.php" method="POST">
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="usuario">Usuário cadastrado</label><br>
                                    <input name="usuario" name="text" class="form-label" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>
 
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="senha">Senha</label><br>
                                    <input name="senha" class="form-label" type="password" placeholder="Sua senha">
                                </div>
                            </div><br>

                            <div class="form-label">
                            <button class="btn btn-success" type="submit" >Entrar</button>
                            </div>

                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>