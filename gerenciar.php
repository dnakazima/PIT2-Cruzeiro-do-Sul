<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 20px;
            border: none;
            cursor: pointer;
            
        }

        .dropdown {

            margin-top: 50px;
            position: relative;
            display: inline-block;
            
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
           
        }

        .dropdown-content a {
            color: #d4e10b;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 20px;
            
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
            
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="position-relative">
            <div class="text-bg-warning border border-3 rounded-3 text-center p-4">
                <h2>Página de cadastro de clientes</h2>
                <div class="dropdown">
                    <button class="dropbtn">Cadastrar</button>
                    <div class="dropdown-content bg-info">
                        <a class="border border-black border-3" href="cadastro_cliente.html">Cadastrar cliente</a>
                        <a class="border border-black border-3" href="cadastro_telefone.html">Cadastrar telefone</a>
                        <a class="border border-black border-3" href="cadastro_endereco.html">Cadastrar endereço</a>
                        <a class="border border-black border-3" href="userLogin.html">Cadastrar usuário</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Pesquisar</button>
                    <div class="dropdown-content bg-info">
                        <a class="border border-black border-3" href="pesquisar_cliente.html">Pesquisar cliente</a>
                        <a class="border border-black border-3" href="pesquisar_tel.html">Pesquisar tel do cliente</a>
                        <a class="border border-black border-3" href="pesquisar_end.html">Pesquisar endereco do cliente</a>
                        <a class="border border-black border-3" href="pesquisar_cliente_join.html">Pesquisar completa</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Alterar</button>
                    <div class="dropdown-content bg-info">
                        <a class="border border-black border-3" href="deletar.html">Deletar registro</a>
                        <a class="border border-black border-3" href="update.html">Alterar cliente ou telefone ou endereco</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">HOME</button>
                    <div class="dropdown-content bg-info">
                        <a class="border border-black border-3" href="index.html">Voltar</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>