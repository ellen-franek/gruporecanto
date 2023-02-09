const paths = {
	project : 'localhost/gruporecanto',
	theme: './', 
	src : './gulp/src/',
	dist : './dist/',
};

/* ****** */
/* STYLES */
/* ****** */
var gulp 			= require('gulp'),
	postcss			= require('gulp-postcss'),
	autoprefixer	= require('autoprefixer'),
	cssvars			= require('postcss-simple-vars'),
	nested			= require('postcss-nested'),
	cssImport		= require('postcss-import'),
	mixins			= require('postcss-mixins'),
	hexrgba			= require('postcss-hexrgba'),
	cssmin			= require('gulp-cssmin'),
	rename			= require('gulp-rename'),
	watch			= require('gulp-watch'),
	del	    		= require('del'),
	minify			= require('gulp-minify'),
	concat			= require('gulp-concat'),
	imagemin		= require('gulp-imagemin'),
	browserSync		= require('browser-sync').create();


gulp.task('styles', function() {
	return gulp.src(paths.src + 'styles/styles.css')
		.pipe(postcss([cssImport, mixins, cssvars, nested, hexrgba, autoprefixer]))
		.pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
		.on('error', function(errorInfo) {
			console.log(errorInfo.toString());
			this.emit('end');
		})
		.pipe(gulp.dest(paths.dist + '/styles'));
});

/* *********** */
/* JAVASCRIPTS */
/* *********** */

//Task Scripts
gulp.task('scripts', function() {
	return gulp.src([
	  paths.theme + 'node_modules/jquery/dist/jquery.min.js',
	  paths.theme + 'node_modules/owl.carousel/dist/owl.carousel.min.js',
	  paths.theme + 'node_modules/lightgallery/dist/js/lightgallery.min.js',
	  paths.theme + 'node_modules/lg-thumbnail/dist/lg-thumbnail.js',
	  paths.theme + 'node_modules/lg-fullscreen/dist/lg-fullscreen.js',
	  paths.theme + 'node_modules/lg-video/dist/lg-video.js',
	  paths.theme + 'node_modules/lg-autoplay/dist/lg-autoplay.js',
	  paths.theme + 'node_modules/lg-pager/dist/lg-pager.js',
	  paths.theme + 'node_modules/lg-zoom/dist/lg-zoom.js'
	])
	.pipe(concat('vendor.js'))
	.pipe(gulp.dest(paths.dist + 'javascripts/vendor'));
  });

//Task Combine-CSS
gulp.task('combine-css', function() {
	return gulp.src([
			
		])
	.pipe(concat('vendor.css'))
	.pipe(gulp.dest(paths.dist + 'styles/vendor'));
});

//Task fonts
gulp.task('fonts', function () {
	gulp.src(paths.src + 'fonts/**/*.*')
		.pipe(gulp.dest(paths.dist + 'fonts/'));
});

//Task images
gulp.task('images', function() {
    gulp.src(paths.src + 'images/**/*.*')
        .pipe(gulp.dest(paths.dist + 'images/'))
});

//Task videos
gulp.task('videos', function() {
    gulp.src(paths.src + 'videos/**/*.*')
        .pipe(gulp.dest(paths.dist + 'videos/'))
});

gulp.task('cssInject', ['styles'], function() {
	return gulp.src(paths.dist + 'styles/styles.min.css')
		.pipe(browserSync.stream());
})

gulp.task('compress', function() {
  gulp.src(paths.src + 'javascripts/**/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest(paths.dist + 'javascripts/'))
});



/* ************* */
/* BUILD + WATCH */
/* ************* */
gulp.task('build', ['cssInject', 'compress', 'fonts', 'images','videos','scripts']);

gulp.task('default', ['cssInject', 'compress', 'fonts', 'images','videos','scripts'], function() {
	browserSync.init({
		notify: false,
		proxy: paths.project
	});

	watch('./**/*.php', function() {
		browserSync.reload();
	});

	watch(paths.src + 'styles/**/*.css', function() {
		gulp.start('cssInject');
	});

	watch(paths.src + 'javascripts/**/*.js', function() {
		gulp.start('compress');
		browserSync.reload();
	});
	watch(paths.src + 'images/**/*.*', function() {
		gulp.start('images');
		browserSync.reload();
	})

});