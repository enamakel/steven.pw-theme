module.exports =
  coffee:
    dest: "assets"
    src: "src/javascript/common.coffee"


  sass:
    dest: ""
    src: "src/stylesheets/style.sass"
    targetFilename: "style.css"


  minify:
    jsDest: "content/build/"
    jsSrc: "content/build/*.js"


  php:
    dest: ""
    src: "src/theme/**/*.jade"

  watch:
    coffeePattern: "src/**/*.{coffee, js, json}"
    jadePattern: "core/client/**/*.jade"
    sassPattern: "src/**/*.{sass, scss, css}"
    phpPattern: "src/**/*.jade"


  bower:
    dest: "assets"
    targetFilename: "libraries.js"