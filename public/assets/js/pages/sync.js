$(window).load(function() {
"use strict";
    setTimeout(function () {
        $('.loader-overlay').addClass('loaded');
    },300);

});

$(document).ready(function() {
  var percent = 0;
  
    $.getJSON('/rest/sync', function (data) {
        // create the chart
        if (data.success == 1) {
          percent = 100;
          $('#heading').text("Done");
          $('#todashboard').show();
        }
    });

    setInterval(function () {
      if (percent <= 100)
        $('#updater').text((percent++) + '%');
    }, Math.floor(Math.random() * 1000) + 100);

});
