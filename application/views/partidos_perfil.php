<div class="row">
  <div class="span8"><h2><?php echo $partido->getSigla();?></h2></div>
  <div class="span4">
      <?php if ($seguindo) { ?>
      <a href="?seguir=0" class="btn btn-primary pull-right">
          Deixar de Seguir
      </a>
      <? } else { ?>
      <a href="?seguir=1" class="btn btn-primary pull-right">
          Seguir
      </a>
      <? } ?>
</div>
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

<br/>

<h2>Amigos que seguem este partido</h2>
<?php if ($this->session->userdata("usuario_logado",false)) { ?>
    <?php if (count($amigos) > 0) { ?>
     <div class="row-fluid">
                <ul class="thumbnails">
        <?php 

            for ($x=0;$x<count($amigos);$x++) {
                $usuario = $amigos[$x]->getUsuario();
        ?>
                  <li class="span3">
                    <a href="http://www.facebook.com/<?php echo $usuario->getFbuid();?>/" class="thumbnail">
                      <img src="https://graph.facebook.com/<?php echo $usuario->getFbuid();?>/picture?type=normal" alt="<?php echo $usuario->getNome();?>">
                    </a>
                  </li>
        <?php } ?>

                </ul>
              </div>
    <?php } else { ?>
    <p>Nenhum amigo segue este partido.</p>
    <?php } ?>
<?php } else { ?>
<p>Você precisa estar logado para isto!</p>
<?php } ?>


<h2>Comente!</h2>
<div class="fb-comments" data-href="<?php echo base_url() . substr($_SERVER["REQUEST_URI"],1,strlen($_SERVER["REQUEST_URI"])-1);?>" data-num-posts="2" data-width="960"></div>