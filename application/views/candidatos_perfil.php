<h2><?php echo $candidato[0]->getNomeUrna(); ?> 
-
<a href="../../partidos/<?php echo $candidato[0]->getPartido()->getSigla(); ?>"><?php echo $candidato[0]->getPartido()->getSigla(); ?></a>
</h2>

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
          <td><?php echo $candidato[0]->getPartido()->getNome(); ?></td>
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
    </thead>   
</table>
<?php } ?>

<h2>Comente!</h2>
<div class="fb-comments" data-href="<?php echo base_url() . substr($_SERVER["REQUEST_URI"],1,strlen($_SERVER["REQUEST_URI"])-1);?>" data-num-posts="2" data-width="960"></div>