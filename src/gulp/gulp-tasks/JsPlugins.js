const { src, dest } = require("gulp");
const path = require("path");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const babel = require("gulp-babel");

const appPaths = require("../paths");
const { removeThemePathFromFilePath } = require("./utils");

/**
 * The task to minify and concatenate the plugins
 */
function jsPlugins(environment = 'development') {
  const options = {
    sourcemaps: true
  };

  if (environment === 'production') {
    options.sourcemaps = false;
  }

  let relativePath;
  return src(appPaths.jsPluginsPath, options)
    .pipe(
      rename((file) => {
        const result = removeThemePathFromFilePath(file, "../../");
        relativePath = file.dirname;
        return result;
      })
    )
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(concat("plugins.min.js"))
    .pipe(uglify())
    .pipe(
      dest(
        (file) => {
          // We go three levels up (`src/js/plugins`), then into `js/`
          finalPath = path.resolve(file.base, relativePath, "../../../", "js");
          return finalPath;
        },
        options
      )
    );
}

module.exports = jsPlugins;
