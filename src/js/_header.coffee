module.exports = ($) ->
  $grabber = $ "header .grabber"
  $header  = $ "header"
  $overlay = $ "header .overlay"


  toggleHeader = ->
    $header.toggleClass "active"
  console.log 'sdf', $header

  $grabber.click toggleHeader
  $overlay.click toggleHeader