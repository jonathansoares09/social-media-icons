<?php // Desenvolvimento do conteúdo exibido pelo plugin

 function smi_plugin_registrando_conteudo($post) {
     echo $post."conteúdo do plugin"; // O conteúdo do post é passado pela variável $post
     require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/templates/conteudo.php');
 }

  add_filter('the_content','smi_plugin_registrando_conteudo'); // Chama a função no the content do post

?>