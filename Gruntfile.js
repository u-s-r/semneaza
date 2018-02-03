module.exports = function (grunt) {
  'use strict';

  require('jit-grunt')(grunt);
  require('time-grunt')(grunt);
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      core: {
        options: {
          outputSourceFiles: true,
          sourceMap: true,
          sourceMapFilename: 'assets/app/css/style.css.map',
          sourceMapURL: 'style.css.map',
          strictMath: true
        },
        files: {
          'assets/app/css/style.css': 'less/style.less'
        }
      }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')
        ]
      },
      core: {
        src: 'assets/app/css/*.css'
      }
    },
    csscomb: {
      options: {
        config: 'less/.csscomb.json'
      },
      core: {
        src: 'assets/app/css/style.css',
        dest: 'assets/app/css/style.css'
      }
    },
    csslint: {
      options: {
        csslintrc: 'less/.csslintrc'
      },
      core: {
        src: 'assets/app/css/style.css'
      }
    },
    cssmin: {
      options: {
        advanced: false,
        keepSpecialComments: '*',
        sourceMap: true
      },
      core: {
        expand: true,
        cwd: 'assets/app/css',
        src: ['*.css', '!*.min.css'],
        dest: 'assets/app/css',
        ext: '.min.css'
      }
    },
    eslint: {
      options: {
        configFile: 'js/.eslintrc'
      },
      target: 'js/*.js'
    },
    jscs: {
      options: {
        config: 'js/.jscsrc'
      },
      grunt: {
        src: 'Gruntfile.js'
      },
      core: {
        src: 'js/*.js'
      }
    },
    concat: {
      options: {
        sourceMap: true
      },
      core: {
        src: [
          'assets/vendor/debounce/jquery.ba-throttle-debounce.min.js',
          'js/usr.js',
          'js/countdown.js',
          'js/map-ro.js',
          'js/map-diaspora.js',
          'js/form.js',
          'js/main.js',
          'js/scroll.js'
        ],
        dest: 'assets/app/js/application.js'
      }
    },
    uglify: {
      options: {
        compress: {
          warnings: false
        },
        sourceMap: true,
        sourceMapIncludeSources : true,
        preserveComments: 'some'
      },
      core: {
        src: '<%= concat.core.dest %>',
        dest: 'assets/app/js/application.min.js'
      }
    },
    copy: {
      packages: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/countdown',
            src: '*.js',
            dest: 'assets/vendor/countdown'
          },
          {
            expand: true,
            cwd: 'node_modules/ion-rangeslider',
            src: ['css/*', 'img/*', 'js/*'],
            dest: 'assets/vendor/ion-rangeslider'
          },
          {
            expand: true,
            cwd: 'node_modules/jquery/dist',
            src: '*',
            dest: 'assets/vendor/jquery'
          },
          {
            expand: true,
            cwd: 'node_modules/jvectormap',
            src: ['*.css', '*.js'],
            dest: 'assets/vendor/jvectormap'
          }
        ]
      }
    },
    watch: {
      configFiles: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js', 'package.json']
      },
      js: {
        files: 'js/*.js',
        tasks: 'js'
      },
      less: {
        files: 'less/**/*.less',
        tasks: 'css'
      }
    },
    clean: {
      options: {
        force: true
      },
      assets: [
        'assets/vendor/countdown',
        'assets/vendor/ion-rangeslider',
        'assets/vendor/jquery',
        'assets/vendor/jvectormap'
      ],
      css: 'assets/app/css',
      js: 'assets/app/js'
    },
    php: {
      dist: {
        options: {
          keepalive: true,
          open: true,
          port: 5000
        }
      }
    }
  });

  grunt.registerTask('assets', 'copy');
  grunt.registerTask('css', ['less', 'postcss', 'csscomb', 'csslint', 'cssmin']);
  grunt.registerTask('js', ['eslint', 'jscs', 'concat', 'uglify']);

  grunt.registerTask('build', ['assets', 'css', 'js']);
  grunt.registerTask('test', ['clean', 'build']);
  grunt.registerTask('serve', ['build', 'php']);
  grunt.registerTask('default', 'build');
};
