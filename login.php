<html>

<head>

</head>

<body>

    <?php
    // Executa a conexao com o mysql e selecionar a base
    include_once 'conect.cfg';

    session_start(); //faz o arquivo iniciar a sessao com o browser

    // pega dados via POST
    // Recebe o valo do email
    $email = $_POST["email"];
    // Recebe o valo do email
    $senha = $_POST["senha"];
    // Converte a senha em um hash criptografado de MD5
    $senha = md5($senha);

    //montar a instrução para ir ao banco
    //e selecionar o usuario que tenha este email
    $sql = "select * from usuarios where email = '$email' AND senha = '$senha' ";
    //executar conexao e roda a query sql
    $resultado = mysqli_query($con, $sql);
    if (mysqli_num_rows($resultado) == 1) {

        // Variavel $row recebe o conteudo do array gerado pelo banco
        $row = mysqli_fetch_array($resultado);
        //enviar dados recebidos do banco de dados para a sessão iniciada
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["perfil"] = $row["perfil"];

        //econtrou
        //vou redirecionar o usuario para a pasta do sistema
        if ($_SESSION["perfil"] == 2) {
            header('Location: index-coord.php');
            //$logado = $conteudo_adm ;
            // Cria o formulario cadastrar e Alterar Senha
            /*echo '<h1>Cadastrar</h1>
                 <form action="cad_usuario.php" method="post">
                 Nome
                          <input type="text" name="nome" id="nome" required><br/>
                 Email
                          <input type="text" name="email" id="email"  required><br/>
                          CPF
                          <input type="text" name="cpf" id="cpf"   required><br/>
                      Senha
                          <input type="password"  name="senha" id="senha"  required><br/>
                          <span >Perfil:</span>
                          </div>					
		<select name="perfil" id="perfil" class="browser-default custom-select">
		  <option value="0" selected="selected">Aluno</option> 
		  <option value="1">Professor</option>
          <option value="2">Coordenador</option>
		  </select>
					
                        <button type="submit" >Cadastrar</button>   
                        
                    <h1>Alterar Senha</h1>
                </form>
                 
                 <form action="alt_senha.php" method="post">
                 
                 Email
                          <input type="text" name="email" id="email"   required>                          
                      Senha
                          <input type="password"  name="senha" id="senha"  required>
                          		
                        <button type="submit" >Alterar</button>                     
                </form>
                
                <a href="consultar.php">Consultar Usuário</a>                

                ';*/
        }
        // Verifica a seção de acordo com o perfíl
        if ($_SESSION["perfil"] == 1) {
            // Variavel $e recebe a linha contendo o email do usuario carregado pelo banco
            $e = $row["email"];
            echo '<h1>Perfil de Professor</h1>
                 <form action="alt_senha.php" method="post"> 
                     Email';
            echo "<input type='text' name='email' id='email' readonly='true' value='$e'";
            echo "required>";
            echo '     Senha
                          <input type="password"  name="senha" id="senha"  required>
                          		
                        <button type="submit" >Alterar</button>                     
                </form>';
        }
    
    } 

    $sql2 = "select * from alunos where email = '$email' AND senha = '$senha' ";
    //executar conexao e roda a query sql
    $resultado2 = mysqli_query($con, $sql2);

    if (mysqli_num_rows($resultado2) == 1) {

        // Variavel $row recebe o conteudo do array gerado pelo banco
        $row = mysqli_fetch_array($resultado);
        //enviar dados recebidos do banco de dados para a sessão iniciada
        $_SESSION["id_user"] = $row["id_aluno"];
        header('location: login-aluno.php');


    }
    else {
        // Cria um alerta informando que o usuário ou senha é inválido
        echo "<script>alert ('Email ou Senha Invalidos!'); location.href='index.php';</script>";
    }

    ?>

    <h1>Area de Gestão</h1>
    <?php
    // Carrega o conteúdo da sessão email que foi criada no login
    

    ?>

</body>

</html>