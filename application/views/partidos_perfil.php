<div class="row">
  <div class="span8"><h2><?php echo $partido->getSigla();?></h2></div>
  <div class="span4"><a class="btn btn-primary pull-right">
      <?php if ($seguindo) { ?>
          Seguir
      <? } else { ?>
          Deixar Seguir
      <? } ?>
</a></div>
</div>



<?php if (count($candidatos) == 0) { ?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oops!</strong> Nenhum candidato encontrado para este partido.
</div>
<?php } else if (count($candidatos) == 1) { ?>
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Um</strong> candidato encontrado.
</div>
<?php } else { ?>
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong><?php echo count($candidatos);?></strong> candidatos encontrados.
</div>
<?php } ?>
