# wp-boilerplate 
This repository is intended to give developers an all batteries included project 
for a pleasant programming experience with WordPress. Feel free to fork it and 
customize it to your own liking! 

## Requirements
It should
- handle third party plugins as dependencies with [Composer](https://getcomposer.org) and [WordPress Packagist](https://wpackagist.org)
- handle frontend dependencies with [yarn](https://yarnpkg.com)
- provide a minimal boilerplate theme to build upon
- provide a consistent code style with [editorconfig](http://editorconfig.org)
- use [Stylus](http://stylus-lang.com) as CSS preprocessor
- use [Babel](https://babeljs.io) to enable writing next generation JavaScript
- use [webpack](https://webpack.github.io) as a JavaScript module bundler
- play well together with [IntelliJ](https://www.jetbrains.com/idea/) and [PHPStorm](https://www.jetbrains.com/phpstorm/)
- have a user friendly commandline interface

## How to use
Write your parameters in `local-config.php`. In production use `production-config.php`. 
For development i use a simple AMP-Service like [MAMP](https://www.mamp.info/en/).

After you cloned this project, you can run setup with:
```bash
yarn setup
```
This will clone the official WordPress in a subfolder that is ignored by git,
install all frontend dependencies defined in `package.json` and install WordPress 
plugins defined in `composer.json`.

After that you can start frontend development and run:
```bash
yarn dev
```
This will watch the js and stylus files and transpile them when they are changed
and also write inline sourcemaps.

When you want to finish your theme for production run:
```bash
yarn prod
```
This will transpile js and stylus files once without sourcemaps and minify it.

## Credits
This project is inspired by the fantastic 
[WordPress Skeleton](https://github.com/markjaquith/WordPress-Skeleton) project
and the boilerplate theme ist based on the wonderful [BlankSlate](http://tidythemes.com)
theme.