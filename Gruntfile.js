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
          sourceMap: false,
          sourceMapFilename: 'build/css/style.css.map',
          sourceMapURL: 'style.css.map',
          strictMath: true,
          paths: [
              'node_modules/bootstrap-less/',
              'node_modules/slick-carousel/slick/'
          ]
        },
        files: {
          'build/css/style.css': [
              'node_modules/ion-rangeslider/css/ion.rangeSlider.css',
              'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
              'node_modules/jvectormap/jquery-jvectormap.css',
              'src/vendor/custom-scrollbar/jquery.custom-scrollbar.css',
              'src/less/style.less'
          ]
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
        src: 'build/css/*.css'
      }
    },
    csscomb: {
      options: {
        config: 'src/less/.csscomb.json'
      },
      core: {
        src: 'build/css/style.css',
        dest: 'build/css/style.css'
      }
    },
    csslint: {
      options: {
        csslintrc: 'src/less/.csslintrc'
      },
      core: {
        src: 'build/css/style.css'
      }
    },
    cssmin: {
      options: {
        advanced: false,
        keepSpecialComments: '*',
        sourceMap: false
      },
      core: {
        expand: true,
        cwd: 'build/css',
        src: [
          '*.css',
          '!*.min.css',
        ],
        options: {
          root: 'build/css'
        },
        dest: 'build/css',
        ext: '.min.css'
      }
    },
    eslint: {
      options: {
        configFile: 'src/js/.eslintrc'
      },
      target: 'src/js/*.js'
    },
    jscs: {
      options: {
        config: 'src/js/.jscsrc'
      },
      grunt: {
        src: 'Gruntfile.js'
      },
      core: {
        src: 'src/js/*.js'
      }
    },
    concat: {
      options: {
        sourceMap: false
      },
      core: {
        src: [
          'node_modules/jquery/dist/jquery.min.js',
          'node_modules/bootstrap-less/js/bootstrap.min.js',
          'node_modules/countdown/countdown.js',
          'node_modules/ion-rangeslider/js/ion.rangeSlider.min.js',
          'node_modules/jvectormap/jquery-jvectormap.min.js',
          'node_modules/jquery-form/dist/jquery.form.min.js',
          'node_modules/slick-carousel/slick/slick.min.js',
          'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
          'src/vendor/custom-scrollbar/jquery.custom-scrollbar.js',
          'src/vendor/debounce/jquery.ba-throttle-debounce.min.js',
          'src/js/usr.js',
          'src/js/countdown.js',
          'src/js/map-ro.js',
          'src/js/form.js',
          'src/js/main.js',
          'src/js/scroll.js',
          'src/js/google-analytics.js',
        ],
        dest: '.tmp/application.js'
      }
    },
    uglify: {
      options: {
        compress: {
          warnings: false
        },
        sourceMap: false,
        sourceMapIncludeSources: true,
        sourceMapIn: '<%= concat.core.dest %>.map',
        preserveComments: 'some'
      },
      core: {
        src: '<%= concat.core.dest %>',
        dest: 'build/js/application.min.js'
      },
    },
    copy: {
      packages: {
        files: [
          {
            expand: true,
            cwd: 'src/img',
            src: ['**'],
            dest: 'build/img'
          },
          {
            expand: true,
            cwd: 'node_modules/bootstrap-less/fonts',
            src: ['*'],
            dest: 'build/fonts'
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
        files: 'src/js/*.js',
        tasks: 'js'
      },
      img: {
        files: 'src/img/**',
        tasks: 'copy'
      },
      less: {
        files: 'src/less/**/*.less',
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
      css: 'build/css',
      js: 'build/js'
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
