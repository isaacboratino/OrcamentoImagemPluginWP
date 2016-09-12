/// <binding Clean='copy:main' />
module.exports = function (grunt) {
    grunt.initConfig({
        bower: {
            dev: {
                //dest: 'www/scripts/frameworks/',
                //js_dest: 'www/scripts/frameworks/',
                css_dest: 'www/css/',
                fonts_dest: 'www/css/fonts/',
                images_dest: 'www/images/frameworks/', 
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
                  { expand: true, cwd: 'bower_components/', src: ['**/*.css'], dest: 'www/css/frameworks/' },
                  { expand: true, cwd: 'bower_components/', src: ['**/*.js'], dest: 'www/scripts/frameworks/' },
                  { expand: true, cwd: 'www/', src: ['**'], dest: '../lib' },
                ],
            },
        }
    });

    //grunt.registerTask('installBower', ['bower:angular']);

    grunt.loadNpmTasks("grunt-bower");
    grunt.loadNpmTasks("grunt-contrib-copy");

    grunt.registerTask('default', ['bower', 'copy']);
};