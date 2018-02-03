module.exports = function (grunt) {
  'use strict';

  require('jit-grunt')(grunt);
  require('time-grunt')(grunt);

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
        src: [
          '*.css',
          '!*.min.css',
          'node_modules/ion-rangeslider/css/*.css'
        ],
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
          'node_modules/countdown/*.js',
          'node_modules/ion-rangeslider/js/*.min.js',
          'node_modules/jquery/*.min.js',
          'node_modules/jvectormap/*.min.js',
          'assets/vendor/debounce/jquery.ba-throttle-debounce.min.js',
          'js/usr.js',
          'js/countdown.js',
          'js/map-ro.js',
          'js/map-diaspora.js',
          'js/form.js',
          'js/main.js',
          'js/scroll.js',
        ],
        dest: '.tmp/application.js'
      }
    },
    uglify: {
      options: {
        compress: {
          warnings: false
        },
        sourceMap: true,
        sourceMapIncludeSources: true,
        preserveComments: 'some'
      },
      core: {
        src: '<%= concat.core.dest %>',
        dest: 'assets/app/js/application.min.js'
      },
    },
    copy: {
      packages: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/ion-rangeslider',
            src: ['img/*'],
            dest: 'assets/vendor/ion-rangeslider'
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
      build: [
        '.tmp'
      ],
      assets: [
        'assets/vendor/ion-rangeslider',
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

  grunt.registerTask('serve', ['build', 'php']);
  grunt.registerTask('build', ['assets', 'css', 'js']);
  grunt.registerTask('test', ['clean', 'build']);
  grunt.registerTask('default', 'build');
};
