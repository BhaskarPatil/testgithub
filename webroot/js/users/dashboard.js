$(function () {
    var chartdat='';
      'use strict';
   
      $.ajax({
        type: "POST",
        url: "line-chart",
        context: document.body
      }).done(function(resdata) {
        
        var line = new Morris.Line({
            element: 'line-chart',           
            data: resdata.res,
            lineColors: ['#efefef'],
            gridTextColor    : '#fff',
            pointStrokeColors: ['#efefef'],
            gridLineColor    : '#efefef',
            xkey: 'X',
            ykeys: ['Y'],
            xLabels: 'day',
            xLabelAngle: 45,
            yLabelFormat: function(y){return y != Math.round(y)?'':y;},
            xLabelFormat: function (d) {
              var weekdays = new Array(7);
              weekdays[0] = "SUN";
              weekdays[1] = "MON";
              weekdays[2] = "TUE";
              weekdays[3] = "WED";
              weekdays[4] = "THU";
              weekdays[5] = "FRI";
              weekdays[6] = "SAT";
          
              return weekdays[d.getDay()] + '-' + 
                     ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
                     ("0" + (d.getDate())).slice(-2);
            },
            resize: true
          });
      });
 

    
    });
    