module.exports = function (grunt) {
    // Auto load grunt tasks
    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);
    // grunt init config
    grunt.initConfig({
        // project path config
        web: {
            // source code path
            app: require('./bower.json').appPath || 'app',
            // build dist path
            dist: 'dist'
        },
        // clean dist
        clean: {
            dist: {
                files: [
                    {
                        dot: true,
                        src: [
                            '.tmp',
                            '<%= web.dist %>/*',
                            '!<%= web.dist %>/.git*'
                        ]
                    }
                ]
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 1 version']
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '.tmp/styles/',
                    src: '{,*/}*.css',
                    dest: '.tmp/styles/'
                }]
            }
        },
        less: {
            development: {
                options: {
                    compress: false,
                    yuicompress: false
                },
                files: {
                    ".tmp/styles/bootstrap.css": "<%= web.app %>/assets/less/bootstrap.less",
                    ".tmp/styles/variables.css": "<%= web.app %>/assets/less/variables.less"
                }
            }
        },
        sass:{
            dist:{
                files:[{
                    expand: true,
                    cwd: '.tmp/styles/',
                    src: '{,*/}*.scss',
                    dest: '.tmp/styles/',
                    ext: '.css'
                }]
            }
        },
        cssmin: {
            minify: {
                expand: true,
                cwd: '.tmp/styles/',
                src: ['*.css', '!*.min.css'],
                dest: '<%= web.dist %>/css/',
                ext: '.min.css'
            }
        },
        uglify: {
            options: {
                mangle: false,
                compress: false,
                beautify: true
            },
            default: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= web.dist %>/assets/js',
                        src: '*.js',
                        dest: '<%= web.dist %>/js'
                    }
                ]
            }
        },
        imagemin: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= web.app %>/assets/images',
                        src: '{,**/}*.{png,jpg,jpeg,gif}',
                        dest: '<%= web.dist %>/images'
                    }
                ]
            }
        },
        svgmin: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= web.app %>/images',
                        src: '{,*/}*.svg',
                        dest: '<%= web.dist %>/images'
                    }
                ]
            }
        },
        htmlmin: {
            dist: {
                options: {
                    collapseWhitespace: true,
                    collapseBooleanAttributes: true,
                    removeComments: true,
                    removeCommentsFromCDATA: true,
                    removeOptionalTags: true
                },
                files: [
                    {
                        expand: true,
                        cwd: '<%= web.dist %>',
                        src: ['*.html', 'views/{,**/}*.html'],
                        dest: '<%= web.dist %>'
                    }
                ]
            }
        },
        copy: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= web.app %>/assets/js',
                        dest: '<%= web.dist %>/js',
                        src: ['assets/js/**/*.js']
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/jquery/dist',
                        src: ['jquery.*'],
                        dest: '<%= web.dist %>/js'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap/dist/js',
                        src: ['bootstrap.min.js'],
                        dest: '<%= web.dist %>/js'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap/dist/',
                        src: ['bootstrap.min.css'],
                        dest: '<%= web.dist %>/css'
                    }
                ]
            },
            html : {
                files: [
                    {
                        expand: true,
                        dot: true,
                        cwd: '<%= web.app %>',
                        dest: '<%= web.dist %>',
                        src: [
                           '*.html',
                            'views/{,**/}*.html'
                        ]
                    }
                ]
            },
            js: {
                files: [
                    {
                        expand: true,
                        dot: true,
                        cwd: '<%= web.app %>/assets/js',
                        dest: '<%= web.dist %>/js',
                        src: [
                            '{,**/}*.js'
                        ]
                    }
                ]
            },
            styles: {
                expand: true,
                cwd: '<%= web.app %>/assets/css',
                dest: '.tmp/styles',
                src: '{,*/}*.css'
            },
            stylesbuild: {
                expand: true,
                cwd: '.tmp/styles/',
                src: ['*.css', '!*.min.css'],
                dest: '<%= web.dist %>/css/',
                ext: '.min.css'
            },
            images: {
                expand: true,
                cwd: '<%= web.app %>/assets/images',
                src: '{,**/}*.{png,jpg,jpeg,gif}',
                dest: '<%= web.dist %>/images'
            }
        },
        concurrent: {
            dist: [
                'copy:js',
                'copy:styles',
                'copy:images',
                'copy:stylesbuild'
            ]
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : ['<%= web.dist %>/{,**/}*.css', '<%= web.dist %>/{,**/}*.html']
                },
                options: {
                    watchTask: true,
                    server: {
                        baseDir: "dist",
                        directory: true
                    },
                    startPath: "views/index.html"
                }
            }
        },

        watch: {
            //styles: {
            //   files: ['<%= web.app %>/assets/less/{,**/}*.less'],
            //    tasks: ['less', 'autoprefixer', 'copy:stylesbuild'],
            //    options: {
            //        nospawn: true
            //    }
            //},
            html :{
                expand: true,
                files: ['<%= web.app %>/views/{,**/}*.html'],
                tasks: ['copy:html', 'htmlmin'],
                tasks: ['copy:html']
            },
            js :{
                files: ['<%= web.app %>/assets/js/{,**/}*.js'],
                tasks: ['copy:js', 'uglify']
            },
            image :{
                files: ['<%= web.app %>/assets/images/{,**/}*.png','<%= web.app %>/assets/images/{,**/}*.jpg'],
                tasks: ['copy:images']
            }
        }
    });
    // register build task
    grunt.registerTask('build', [
        'clean:dist',
        'concurrent:dist',
        'sass',
        'autoprefixer',
        'copy:dist',
        'copy:html',
        'copy:js',
        'copy:styles',
        'copy:stylesbuild',
        'cssmin'
    ]);
    grunt.registerTask('default', ['browserSync', 'watch']);
};