window.onload = function() {
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
       type: 'pie',
       data: {
           labels: ["NWT", "SEW", "ITP", "INSY", "SYT", "MEDT", "ITSI"],
           datasets: [{
               data: [12, 19, 3, 5, 5, 3, 17],
               backgroundColor: ["rgba(255, 0, 0, 1)", "rgba(255, 127, 0, 1)", "rgba(255, 255, 0, 1)", "rgba(0, 128, 0, 1)", "rgba(0, 0, 255, 1)", "rgba(46, 43, 95, 1)", "rgba(139, 0, 255, 1)"]
           }]
       },
       options: {
           title: {
               display: true,
               text: 'My Tortendiagramm'
           }
       }
    });
   }