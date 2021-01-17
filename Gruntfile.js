/*global module:false*/
module.exports = function (grunt) {

  // Project configuration.
    grunt.initConfig({
      // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
        '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
        '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
        ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
      // Task configuration.

        clean: {
            less: ['webroot/css/dashboard.*','webroot/css/login.*']
        },

        less: {
            development: {
                options: {
                    paths: ['webroot/less'],
                    banner: '/** <%= pkg.title || pkg.name %> - v<%= pkg.version %> **/\n'
                },
                files: {
                    'webroot/css/dashboard.css': [
                        'webroot/less/dashboard.less'
                    ],
                    'webroot/css/login.css': [
                        'webroot/less/login.less'
                    ],
                    'webroot/css/frontend.css': [
                        'webroot/less/frontend.less'
                    ],
                    'webroot/css/common.css': [
                        'webroot/less/common.less'
                    ]
                }
            },
            production: {
                options: {
                    paths: ['webroot/less'],
                    compress: true,
                    plugins: [
                    //new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
                    //new (require('less-plugin-clean-css'))({ advanced: true })
                    ]
                },
                files: {
                    'webroot/css/dashboard.min.css': [
                        'webroot/less/dashboard.less'
                    ],
                    'webroot/css/login.min.css': [
                        'webroot/less/login.less'
                    ],
                    'webroot/css/frontend.min.css': [
                        'webroot/less/frontend.less'
                    ],
                    'webroot/css/common.min.css': [
                        'webroot/less/common.less'
                    ]
                }
            }
        },

        watch: {
            assets: {
                files: [
                    'webroot/less/*.less',
                    'webroot/less/**/*.less'
                ],
                tasks: [/*'clean:less',*/ 'less'],
                options: {
                    spawn: false
                }
            }
        }
    });

  // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    //grunt.loadNpmTasks('grunt-contrib-clean');

  // Default task.
    grunt.registerTask('default', ['less']);
};
