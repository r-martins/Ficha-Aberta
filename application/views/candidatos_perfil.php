<h2><?php echo $candidato[0]->getNomeUrna(); ?></h2>

<?php if        (count($candidato) == 0) { ?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oops!</strong> Nenhum candidato encontrado.
</div>
<?php } else { ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>N&uacute;mero: </th>
          <td><?php echo $candidato[0]->getNumero(); ?></td>
        </tr>
        <tr>
          <th>Nome do Candidato</th>
          <td><?php echo $candidato[0]->getNomeUrna(); ?></td>
        </tr>
        <tr>
          <th>Nome Real do Candidato</th>
          <td><?php echo $candidato[0]->getNome(); ?></td>
        </tr>
        <tr>
          <th>Situa&ccedil;&atilde;o</th>
          <td><?php echo $candidato[0]->getSituacao(); ?></td>
        </tr>
        <tr>
          <th>Profiss&atilde;o/Cargo atual</th>
          <td><?php echo $candidato[0]->getCargoAtual(); ?></td>
        </tr>
        <tr>
          <th>Coliga&ccedil;&atilde;o</th>
          <td><?php echo $candidato[0]->getColigacao(); ?></td>
        </tr>
    </thead>   </table>
<?php } ?>
