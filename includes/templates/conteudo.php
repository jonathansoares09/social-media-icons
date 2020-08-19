<!--- Gerando o conteúdo que é exibido pelo plugin --->

<style>
    .smi-conteudo .smi-icones img{
        width: 35px;
        height: auto;
        padding: 3px;
    }
</style>
<div class="smi-conteudo">
   Me encontre nas redes sociais
    <hr>
    <?php $smi_opcoes = get_option('smi_opcoes_icons'); ?>
    <div class="smi-icones">
      <a href="<?php echo $smi_opcoes['fb_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'../images/fb-icon.png' ?>"></a>
      <a href="<?php echo $smi_opcoes['tt_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'../images/tt-icon.png' ?>"></a>
      <a href="<?php echo $smi_opcoes['ig_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'../images/ig-icon.png' ?>"></a>
    </div> 
</div>