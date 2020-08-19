<?php 
    $smi_opcoes = get_option('smi_opcoes_icons'); // Recebe o bloco das opções que foi criada no arquivo social-media-icons-opcoes.php
    // print_r($smi_opcoes);
?>

<div class="wrap">  <!-- Class CSS do wordpress que formata os campos das opções -->
 <h3>Opções Plugin Social Media Icons 2.0 Turbo</h3>
 <hr>
 <form action="options.php" method="post">  <!-- O arquivo options.php faz parte do Settings API -->
    <?php settings_fields('smi_opcoes'); ?> <!-- Chama o grupo de campos que criamos no arquivo social-media-icons-opcoes.php -->

    <label>Facebook</label><br>
    <input type="url" name="smi_opcoes_icons[fb_perfil]" id="smi_opcoes_icons[fb_perfil]" value="<?php echo $smi_opcoes['fb_perfil']; ?>"><br>

    <label>Twitter</label><br>
    <input type="url" name="smi_opcoes_icons[tt_perfil]" id="smi_opcoes_icons[tt_perfil]" value="<?php echo $smi_opcoes['tt_perfil']; ?>"><br>

    <label>Instagram</label><br>
    <input type="url" name="smi_opcoes_icons[ig_perfil]" id="smi_opcoes_icons[ig_perfil]" value="<?php echo $smi_opcoes['ig_perfil']; ?>"><br><br>

    <input type="submit" name="submit" value="Salvar">
 </form>
</div>