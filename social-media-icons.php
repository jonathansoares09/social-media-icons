<?php
/*
    Plugin Name: Social Media Icons 2.0 Turbo
    Description: Um plugin que exibe os icones das redes sociais do usuário ao fim de cada post.
    Author: Jonathan Soares
    Author URI: https://github.com/jonathansoares09
    Version: 0.1
*/

if(!defined('ABSPATH')){ // Medida de segurança de acesso ao plugin.
    exit("Acesso negado");
}

// Definição da constante do diretório absoluto.

define('SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN', plugin_dir_path(__FILE__));

// Includes
require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-conteudo.php');
require_once(SMI_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/social-media-icons-opcoes.php');


?>