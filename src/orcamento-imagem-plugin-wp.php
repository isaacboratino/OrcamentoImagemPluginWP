<?php
/* 
Plugin Name: Orcamento Imagem Plugin WP
Plugin URI: localhost
Description: Essa é a descrição do meu plugin.
Version: 0.0.1
Author: Autor
Author URI: localhost
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Classe tutsup plugin
 * 
 * Carrega um shortcode para exibir um texto simples
 */
 
// Verifica se não existe nenhum classe com o mesmo nome
if ( ! class_exists('AngularPlugin') ) {
 
	class AngularPlugin
	{
    
        /**
         * Este é o construtor da classe. Tudo aqui será executado quando o 
         * plugin for ativado.
         */
        public function __construct() {
            /* Adiciona o shortcode */
            add_shortcode( 'angular-plugin', array( $this, 'MetodoSimples' ) );
        }
        
        /**
         * Este é um método simples que irá exibir o texto do nosso shortcode
         */
        public function MetodoSimples () {
            include dirname(__FILE__) . '/lib/index.html';;
        }
        
	} // TestePlugin
 
	/* Carrega a classe */
	$AngularPlugin_settings = new AngularPlugin();
    
} // class_exists