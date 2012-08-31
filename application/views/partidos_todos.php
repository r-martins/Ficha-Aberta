<h2>Listando todos os Partidos</h2>

<?php if        (count($partidos) == 0) { ?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oops!</strong> Nenhum partido encontrado.
</div>
<?php } else if (count($partidos) == 1) { ?>
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Um</strong> partido encontrado.
</div>
<?php } else { ?>
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong><?php echo count($partidos);?></strong> partidos encontrados.
</div>
<?php } ?>

<?php if        (count($partidos) > 0) { ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Id</th>
          <th>Sigla</th>
          <th></th>
        </tr>
    </thead>   
    <tbody>
        <?php for ($x=0;$x<count($partidos);$x++) { ;?>
        <tr valign="middle">
            <td>
              <?php echo $partidos[$x]->getId();?>
            </td>
            <td>
              <?php echo $partidos[$x]->getSigla();?>
            </td>
            <td width="100" nowrap>
                <a href="<?php echo base_url();?>candidatos/por-partido/<?php echo str_replace(" ","-",strtolower($partidos[$x]->getSigla()));?>/" class="btn">
                      Candidatos
                </a>
            </td>
            <td width="90" nowrap>
                <a href="<?php echo base_url();?>partidos/<?php echo str_replace(" ","-",strtolower($partidos[$x]->getSigla()));?>/" class="btn btn-primary">
                      Detalhes
                </a>
            </td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
<?php } ?>
