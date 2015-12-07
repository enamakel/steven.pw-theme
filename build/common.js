(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
module.exports = function($) {
  var $grabber, $header, $overlay, toggleHeader;
  $grabber = $("header .grabber");
  $header = $("header");
  $overlay = $("header .overlay");
  toggleHeader = function() {
    return $header.toggleClass("active");
  };
  console.log('sdf', $header);
  $grabber.click(toggleHeader);
  return $overlay.click(toggleHeader);
};

},{}],2:[function(require,module,exports){
(function($, Masonry) {
  return $(document).ready(function() {
    return require("./_header")($);
  });
})(window.jQuery, window.Masonry);

},{"./_header":1}]},{},[2])
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi4uLy4uL25vZGVfbW9kdWxlcy9ndWxwLWNvZmZlZWlmeS9ub2RlX21vZHVsZXMvYnJvd3NlcmlmeS9ub2RlX21vZHVsZXMvYnJvd3Nlci1wYWNrL19wcmVsdWRlLmpzIiwiX2hlYWRlci5jb2ZmZWUiLCJjb21tb24uY29mZmVlIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FDQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FDWkE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsIm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24oJCkge1xuICB2YXIgJGdyYWJiZXIsICRoZWFkZXIsICRvdmVybGF5LCB0b2dnbGVIZWFkZXI7XG4gICRncmFiYmVyID0gJChcImhlYWRlciAuZ3JhYmJlclwiKTtcbiAgJGhlYWRlciA9ICQoXCJoZWFkZXJcIik7XG4gICRvdmVybGF5ID0gJChcImhlYWRlciAub3ZlcmxheVwiKTtcbiAgdG9nZ2xlSGVhZGVyID0gZnVuY3Rpb24oKSB7XG4gICAgcmV0dXJuICRoZWFkZXIudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XG4gIH07XG4gIGNvbnNvbGUubG9nKCdzZGYnLCAkaGVhZGVyKTtcbiAgJGdyYWJiZXIuY2xpY2sodG9nZ2xlSGVhZGVyKTtcbiAgcmV0dXJuICRvdmVybGF5LmNsaWNrKHRvZ2dsZUhlYWRlcik7XG59O1xuIiwiKGZ1bmN0aW9uKCQsIE1hc29ucnkpIHtcbiAgcmV0dXJuICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgIHJldHVybiByZXF1aXJlKFwiLi9faGVhZGVyXCIpKCQpO1xuICB9KTtcbn0pKHdpbmRvdy5qUXVlcnksIHdpbmRvdy5NYXNvbnJ5KTtcbiJdfQ==
