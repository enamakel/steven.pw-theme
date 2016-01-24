do($=window.jQuery, Masonry=window.Masonry) ->
  $(document).ready ->

    $grid = $ ".grid"
    grid = document.querySelector ".grid"

    $grid.imagesLoaded ->
      new Masonry grid,
        itemSelector: ".grid-item"
        gutter: 0

    $grid2 = $ ".grid2"
    grid2 = document.querySelector ".grid2"
    $grid2.imagesLoaded ->
      new Masonry grid2,
        itemSelector: ".grid-item"
        gutter: 0

    require("./_header") $