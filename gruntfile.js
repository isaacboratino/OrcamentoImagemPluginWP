/// <binding Clean='copy:main' />
module.exports = function (grunt) {
    grunt.initConfig({
        bower: {
            dev: {
                //dest: 'src/client/www/scripts/frameworks/',
                //js_dest: 'src/client/www/scripts/frameworks/',
                css_dest: 'src/client/src/client/www/css/',
                fonts_dest: 'src/client/www/css/fonts/',
                images_dest: 'src/client/www/images/frameworks/', 
                options: {
                    expand: true,
                    stripAffix: true,
                    verbose: true
                }
            }
        },        
        copy: {
            main: {
                files:[
                  // copia todos os arquivos do diretorio e subdiretorio
                  { expand: true, cwd: 'src/client/bower_components/', src: ['**/*.css','**/*.eot','**/*.svg','**/*.ttf','**/*.woff','**/*.woff2'], dest: 'src/client/www/css/frameworks/' },
                  { expand: true, cwd: 'src/client/bower_components/', src: ['**/*.js'], dest: 'src/client/www/scripts/frameworks/' },
                  { expand: true, cwd: 'src/client/www/', src: ['**'], dest: 'C:/wamp64/www/wordpress/wp-content/plugins/orcamento-imagem-plugin-wp/' },
                  /*{ expand: true, cwd: 'src/client/www/', src: ['**'], dest: 'lib' },
                  { expand: true, cwd: 'lib/', src: ['**'], dest: 'C:/wamp64/www/wordpress/wp-content/plugins/orcamento-imagem-plugin-wp/' }*/                    
                ],
            },
        }
    });

    //grunt.registerTask('installBower', ['bower:angular']);

    grunt.loadNpmTasks("grunt-bower");
    grunt.loadNpmTasks("grunt-contrib-copy");

    grunt.registerTask('default', ['bower', 'copy']);
};