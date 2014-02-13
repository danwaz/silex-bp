module.exports = function(grunt) {

    // Configure Grunt
    grunt.config.init({
        pkg: grunt.file.readJSON('package.json'),
        watch : {
            js : {
                files : ['web/js/app/*.js', 'web/js/libs/*.js', 'web/js/main.js']
            },
            sass : {
                files : ['web/sass/**/*.scss'],
                tasks : ['compass:dev']
            }
        },
        compass : {
            options : {
                config : 'config/config.rb'
            },
            dev : {},
            dist : {
                options : {
                    outputStyle : 'compressed'
                }
            }
        }
    });

    // Load Grunt plugins
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');

    // Register Grunt tasks
    grunt.task.registerTask('default', ['compass:dev', 'watch']);
    grunt.task.registerTask('compile', ['compass:dev']);
};