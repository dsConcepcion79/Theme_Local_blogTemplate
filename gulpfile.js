"use strict";

var gulp                 = require('gulp')
  , less                 = require('gulp-less')
  , watch                = require('gulp-watch')
  , runSequence          = require('run-sequence')
  , concat               = require('gulp-concat')
  , minifyCss            = require('gulp-minify-css')
  , uglify               = require('gulp-uglify')
  , autoprefixer         = require('gulp-autoprefixer')
  , rename               = require('gulp-rename')

  , styleBase            = './'
  , styleSource          = styleBase + 'less/'
  , cssBuild             = styleBase + 'theme.css'
  , watchLessFiles       = styleSource + '/**/*.less'
  , lessFiles            = styleSource + '/**/main.less'

  , jsBase               = 'js/'
  , jsLib                = jsBase + 'lib/'
  , jsTemplates          = jsBase + 'templates/**/*.js'
  , jsMain               = jsBase + 'main.js'
  , watchJsLibFiles      = jsLib + '/**/*.js'
  ;

gulp.task( 'less', function() {
  return gulp.src( lessFiles )
  .pipe( less() )
  .on( 'error', function( err ) {
    console.log( err );
    this.emit( 'end' );
  })
  .pipe( concat( '/theme.css' ) )
  .pipe( autoprefixer({
    browsers: ['last 4 versions'],
    cascade: false
  }))
  .pipe( minifyCss( {compatibility: 'ie9'} ) )
  .pipe( gulp.dest( styleBase ) )
});

gulp.task( 'js_libs', function() {
  return gulp.src( watchJsLibFiles )
  .pipe( concat( 'libs.js' ) )
  .pipe( uglify() )
  .pipe( rename( { suffix: '.min' } ) )
  .pipe( gulp.dest( jsBase ) )
});

gulp.task( 'js_global', function() {
  return gulp.src( [jsTemplates] )
  .pipe( concat( 'main.js' ) )
  .pipe( gulp.dest( jsBase ) )
});

gulp.task( 'min_js_main', function() {
  return gulp.src( [jsTemplates] )
  .pipe( concat( 'main.min.js' ) )
  .pipe( uglify() )
  .pipe( gulp.dest( jsBase ) )
});

gulp.task( 'default', function (cb) {
  gulp.watch( watchLessFiles, ['less'] );
  gulp.watch( watchJsLibFiles, [ 'js_libs' ] );
  gulp.watch( [jsTemplates], [ 'js_global' ] );
  gulp.watch( [jsTemplates], [ 'min_js_main' ] );

  runSequence( [ 'less', 'js_libs', 'js_global', 'min_js_main' ], cb );
});

