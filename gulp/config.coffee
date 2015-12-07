module.exports =
  coffee:
    dest: "build"
    src: "src/js/common.coffee"

  sass:
    dest: ""
    src: "src/css/style.sass"
    targetFilename: "style.css"
    targetFilenameMin: "style.css"


  md5:
    dest: "content/build/md5"
    src: "content/build/*.{js,css}"


  checksum:
    dest: "build"
    filename: "checksums"
    hash: "md5"
    src: "content/build/*.{js,css}"


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
    serverPattern: "core/server/views/*.coffee"


  docs:
    backend:
      dest: "docs/server"
      src: "core/server/**/*.coffee"
    frontend:
      dest: "docs/client"
      src: "core/client/**/*.coffee"
    hostname: "http://localhost:8000"


  server:
    footer:
      dest: "core/server/views/"
      src: "core/server/views/**/*.coffee"
    db:
      dest: "core/server/db"
      filename: "populate.js"
      src: "core/server/db/*.coffee"


  bower:
    dest: "build"
    targetFilename: "libraries.js"