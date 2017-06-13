import gulp from 'gulp';
import del from 'del';
import run from 'run-sequence';
import replace from 'gulp-replace';
import { append } from 'gulp-insert';
import { log } from 'gulp-util';
import { clone } from 'gulp-git';

const SRC_REPO = 'https://github.com/bloodf/semantic-ui-sass';
const TEMP_DIR = '.temp';

gulp.task('clean', () => {
  return del(['./.temp', './src/semantic-ui.scss', './src/semantic-ui.js', './src/scss', './src/icons', './src/images', './src/js']);
});

gulp.task('fetch', (done) => {
  clone(SRC_REPO, { args: TEMP_DIR, quiet: true }, done);
});

gulp.task('move-scss', () => {
  return gulp.src(`${TEMP_DIR}/app/assets/stylesheets/semantic-ui/**/*.scss`)
    .pipe(replace(/semantic-ui\/icons/g, '#{\$icons-font-path}/icons'))
    .pipe(replace(/semantic-ui\/flags\.png/g, '#{\$flags-image-path}/flags.png'))
    .pipe(replace(/font-url\(/g, 'url('))
    .pipe(gulp.dest('./scss/'));
});

gulp.task('move-semantic', ['move-scss'], () => {
  return gulp.src(`${TEMP_DIR}/app/assets/stylesheets/semantic-ui.scss`)
    .pipe(replace(/semantic-ui/g, `scss`))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('move-images', () => {
  return gulp.src(`${TEMP_DIR}/app/assets/images/semantic-ui/**/*`)
    .pipe(gulp.dest('./dist/images/'));
});

gulp.task('move-icons', () => {
  return gulp.src(`${TEMP_DIR}/app/assets/fonts/semantic-ui/**/*`)
    .pipe(gulp.dest('./dist/icons/'));
});

gulp.task('move-javascript', () => {
  return gulp.src(`${TEMP_DIR}/app/assets/javascripts/semantic-ui/**/*`)
    .pipe(gulp.dest('./dist/js/'));
});

gulp.task('move-js', ['move-javascript'], () => {
  return gulp.src(`${TEMP_DIR}/app/assets/javascripts/semantic-ui.js`)
    .pipe(replace(/\/\/= require semantic-ui\/(.+)/g, `require('./src/js/$1');`))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('append-to-variables', () => {
  return gulp.src('./src/scss/globals/_variables.scss')
    .pipe(append(`$icons-font-path: '../icons' !default;\n`))
    .pipe(append(`$flags-image-path: '../images' !default;\n`))
    .pipe(gulp.dest('./dist/scss/globals'));
});

gulp.task('build', (done) => {
  run('clean', 'fetch', ['move-semantic', 'move-images', 'move-icons', 'move-js'], 'append-to-variables', done);
});

gulp.task('test', () => {
  return log('testing...');
});

gulp.task('release', () => {
  return log('releasing...');
});
