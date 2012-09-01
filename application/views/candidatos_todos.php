<h2>Listando todos os candidatos do partido <?php echo $partido->getSigla();?></h2>

<?php if        (count($candidatos) == 0) { ?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oops!</strong> Nenhum candidato encontrado.
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

<?php if        (count($candidatos) > 0) { ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Número</th>
          <th>Nome Urna</th>
          <th>Nome</th>
          <th></th>
        </tr>
    </thead>   
    <tbody>
        <?php for ($x=0;$x<count($candidatos);$x++) { ;?>
        <tr valign="middle">
            <td>
              <?php echo $candidatos[$x]->getNumero();?>
            </td>
            <td>
              <?php echo $candidatos[$x]->getNome();?>
            </td>
            <td>
              <?php echo $candidatos[$x]->getNomeUrna();?>
            </td>
            <td width="90" nowrap>
                <a href="<?php echo base_url();?>candidatos/<?php echo $candidatos[$x]->getId();?>/" class="btn btn-primary">
                      Detalhes
                </a>
            </td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
<?php } ?>
