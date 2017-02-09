var elixir = require('laravel-elixir');
var gulp = require('gulp');
var connect = require('gulp-connect');
var plumber = require('gulp-plumber');
var sass = require('gulp-ruby-sass');
var cssmin = require('gulp-cssmin');
var uglify = require('gulp-uglify');
var del = require('del');

var paths = {
	sassStyles: "sass/**/*.sass";
	css_output: "../public/css",
	php : "../app/views/**/*.php"
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});
