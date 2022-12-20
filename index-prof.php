<?php
session_start();
// Executa a conexao com o mysql e selecionar a base
include 'conect.cfg';

if ($_SESSION["perfil"] != 1) {
  echo "<script>alert ('Permissao Invalida no Arquivo!'); location.href='index.php';</script>";
}

$sql_alunos = "SELECT * FROM alunos";
$result_alunos = mysqli_query($con, $sql_alunos);
if (mysqli_num_rows($result_alunos) > 0) {


?>
  <!DOCTYPE html>
  <html lang="pt">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
  </head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }

    td,
    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:ntd-child(even) {
      background-color: #dddddd;
    }
  </style>
  </head>

  <body>

    <h2>LANÇAMENTO DE NOTAS DOS ALUNOS</h2>
    <a href="index.php" class="btn btn-primary">SAIR</a>
    <br></br>
    <table>
      <tbody>
        <tr>
          <td>Matrícula</td>
          <td>Nome</td>
          <td>CR
          <td>
            Status
            <td>
              Opções
        </tr>

        <?php foreach ($result_alunos as $row_aluno) : ?>
          <tr>
            <td><?= $row_aluno['id_aluno'] ?></td>
            <td><?= $row_aluno['nome'] ?></td>
            <td>
              <?php
              /* CR do Aluno */
              $id_aluno = $row_aluno['id_aluno'];

              $sql_cr = "SELECT AVG(nota) AS cr FROM avaliacoes WHERE id_aluno=" . $id_aluno;
              $result_cr = mysqli_query($con, $sql_cr);
              if (mysqli_num_rows($result_cr) > 0) {
                foreach ($result_cr as $result_cr) :
                  $cr = $result_cr['cr'];
                  echo $result_cr['cr'];
                endforeach;
              }
              ?>
            </td>

            <td><?php echo $cr > 5.9 ? '<span style="color: green;"><b>Aprovado</b></span>' : '<span style="color: red;"><b>Reprovado</b></span>' ?></td>

            <td>
              <button onclick="document.getElementById('in<?= $row_aluno['id_aluno']; ?>').style.display='block'" class="w3-button w3-blue">Inserir Nota</button>

              <button onclick="document.getElementById('vn<?= $row_aluno['id_aluno']; ?>').style.display='block'" class="w3-button w3-green">Visualizar Nota</button>
            </td>

          </tr>

          <!-- Modal Inserir Nota-->
          <div id="in<?= $row_aluno['id_aluno']; ?>" class="w3-modal">
            <div class="w3-modal-content">
              <div class="text-center">
                <p><b><?= $row_aluno['nome']; ?></b></p>
              </div>
              <div class="w3-container">
                <span onclick="document.getElementById('in<?= $row_aluno['id_aluno']; ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>

                <div class="container-fluid">
                  <form action="cad-avaliacao.php" method="post">
                    <h1>
                      <input name="id_aluno" value="<?= $row_aluno['id_aluno']; ?>" hidden="true">

                      <?php $sql_disc = "select * from  disciplinas";
                      $res_disc = mysqli_query($con, $sql_disc);
                      if (mysqli_num_rows($res_disc) > 0) {
                      ?>

                        <select class="form-select" id="sel1" name="id_disciplina">
                          <?php foreach ($res_disc as $row_disc) : ?>
                            <option value="<?= $row_disc['id_disciplina'] ?>"><?= $row_disc['disciplina'] ?></option>
                        <?php endforeach;
                        }
                        ?>
                        </select>

                    </h1>
                    <div class="row row-no-gutters">
                      <div class="col-sm-2">Nota</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <input type="text" name="nota" class="form-control">

                      </div>
                    </div>
                    <div class="row row-no-gutters">
                      <div class="col-sm-2">Período</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <select class="form-select" id="sel1" name="periodo">

                          <option value="1-<?= date('Y') ?>">1-<?= date('Y') ?></option>
                          <option value="2-<?= date('Y') ?>">2-<?= date('Y') ?></option>
                          <option value="3-<?= date('Y') ?>">3-<?= date('Y') ?></option>
                          <option value="4-<?= date('Y') ?>">4-<?= date('Y') ?></option>
                        </select>

                      </div>
                    </div>

                    <p>
                    <div class="row text-center">
                      <button type="submit">ATUALIZAR</button>
                    </div>
                    </p>
                  </form>
                </div>
                <br />
              </div>
            </div>
          </div>
          </div>
          <!-- Final Modal Inserir Nota -->

          <!-- Modal Visualizar Nota-->
          <div id="vn<?= $row_aluno['id_aluno']; ?>" class="w3-modal">
            <div class="w3-modal-content">
              <div class="w3-container">
                <div class="text-center">
                  <p><b><?= $row_aluno['nome']; ?></b></p>
                </div>
                <span onclick="document.getElementById('vn<?= $row_aluno['id_aluno']; ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <p>
                  <?php
                  $id_aluno = $row_aluno['id_aluno'];
                  $sql_avaliacoes = "SELECT * FROM avaliacoes WHERE id_aluno=" . $id_aluno;
                  $result_avaliacoes = mysqli_query($con, $sql_avaliacoes);
                  if (mysqli_num_rows($result_avaliacoes) > 0) {
                    foreach ($result_avaliacoes as $row) :
                      $id_disciplina = $row['id_disciplina'];
                      $sql_disc = "SELECT * FROM  disciplinas WHERE id_disciplina=" . $id_disciplina;
                      $res_disc = mysqli_query($con, $sql_disc);
                      if (mysqli_num_rows($res_disc) > 0) {

                        foreach ($res_disc as $row_disc) : ?>
                          <?= $row_disc['disciplina'] ?></option>
                      <?php endforeach;
                      }

                      ?>
                <p><b><?= $row["nota"] ?> => <?= $row['nota'] ?></b></p><br />


            <?php endforeach;
                  }
            ?>
              </div>
            </div>

            </p>
          </div>
          </div>
          </div>
          </div>
          <!-- Final Modal Visualizar Nota -->

      <?php
        endforeach;
      }
      ?>

      </tbody>

    </table>
  </body>

  </html>