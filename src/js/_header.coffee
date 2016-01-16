module.exports = ($) ->
  $grabber = $ "header .grabber"
  $header  = $ "header"
  $body  = $ "body"
  $overlay = $ "header .overlay"


  toggleHeader = -> $body.toggleClass "show-header-submenu"

  $grabber.click toggleHeader
  $overlay.click toggleHeader