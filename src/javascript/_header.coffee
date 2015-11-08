module.exports = ($) ->
  $grabber = $ "header .grabber"
  $header  = $ "header"
  $overlay = $ "header .overlay"


  toggleHeader = -> $header.toggleClass "active"


  $grabber.click toggleHeader
  $overlay.click toggleHeader