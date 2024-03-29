const { src, dest } = require("gulp");
const path = require("path");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");

const appPaths = require('../paths');
const { removeThemePathFromFilePath } = require("./utils");


/**
 * NOT IN USE UNTIL BrowserSync UPDATES THEIR DOCS
 */


/**
 * The task to convert the SASS file into css
 */
function css(environment = 'development') {
    let relativePath;
    const options = {
      sourcemaps: true
    };
  
    if (environment === 'production') {
      options.sourcemaps = false;
    }

    return src(appPaths.sass, options)
      .pipe(sass())
      .pipe(
        rename((file) => {
          const result = removeThemePathFromFilePath(file, "../../../");
          relativePath = file.dirname;
          return result;
        })
      )
      .pipe(stream())
      .pipe(
        dest(
          (file) => {
            // We go two levels up (`src/sass`), to the root folder
            finalPath = path.resolve(file.base, relativePath, "../../");
            return finalPath;
          },
          options
        )
      )
  }