<div class="container">
  <?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
      Este dado não pode ser removido,
      pois está atrelado em outras tabelas
    </div>
  <?php } ?>
  <br>
  <h1>Equipes cadastradas</h1>
  <a class="btn btn-secondary"
   href="crud_equipe.php?acao=novo">
    <span data-feather="plus-square"></span> Adicionar
  </a>
  <br/><br/>
   <table class="table table-bordered table-hover">
     <thead class="">
        <th>#</th>
        <th class="col-md-1">Equipe</th>
        <th class="col-md-1">Região</th>
        <th>Editar</th>
        <th>Excluir</th>
     </thead>
     <tbody>
        <?php foreach($lista_equipe as $item):
              $id = $item['id']; ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['nome_equipe']; ?></td>
            <td><?= $item['cidade']; ?></td>
            <td>
              <a class="btn btn-secondary" href="crud_equipe.php?acao=buscar&id=<?= $id; ?>">
                <span data-feather="edit"></span>
              </a>
            </td>
            <td>
                <a class="btn btn-secondary" href="crud_equipe.php?acao=deletar&id=<?= $id; ?>">
                  <span data-feather="delete"></span>
                </a>
            </td>
        </tr>
        <?php endforeach ?>
     </tbody>
   </table>
</div> <!-- Div Container-->
