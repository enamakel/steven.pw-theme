module.exports =
  coffee:
    dest: "build"
    src: "src/js/common.coffee"

  sass:
    dest: ""
    src: "src/css/style.sass"
    targetFilename: "style.css"
    targetFilenameMin: "style.css"


  minify:
    jsDest: "content/build/"
    jsSrc: "content/build/*.js"


  jade:
    dest: "content/build"
    src: "core/client/**/*.jade"
    targetFilename: "templates.js"
    targetFilenameMin: "templates.js"


  watch:
    coffeePattern: "src/**/*.{coffee,js,json}"
    jadePattern: "core/client/**/*.jade"
    sassPattern: "src/**/*.{sass, scss, css}"


  bower:
    dest: "build"
    targetFilename: "libraries.js"