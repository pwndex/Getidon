global.$ = global.jQuery = require('jquery/dist/jquery.min.js');
require('jquery/dist/jquery.slim.min.js');
require('popper.js/dist/popper.min.js');
require('bootstrap/dist/js/bootstrap.min.js');

// Bootstrap search filter js code
$(document).ready(function(){
  $("#search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#search-table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});