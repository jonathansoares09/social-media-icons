<?php  // Cria a página de opções do icone (conteúdo do plugin dentro do painel wp-admin)

    function smi_pagina_de_opcoes_frontend() {
        require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/opcoes-template.php');
    }

    function smi_pagina_de_opcoes_registro() { 
        add_options_page('SMI Opções','SMI Opções','manage_options','smi','smi_pagina_de_opcoes_frontend');
    }

    add_action('admin_menu','smi_pagina_de_opcoes_registro');  // Chamando a página de opções do plugin

    // Função que chama a Settings API do Wordpress
    function smi_carregando_settings_api() {
        register_setting('smi_opcoes','smi_opcoes_icons');
    }

    add_action('admin_init','smi_carregando_settings_api');
?>