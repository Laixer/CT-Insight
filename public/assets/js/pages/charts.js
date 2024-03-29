$(function () {

      /**** Radar Charts: ChartJs ****/
      function default_radar_data(resultset) {
        return {
          labels: ["Projecten", "Offertes", "Facturen", "BTW verlegt", "Meerwerk", "Minderwerk", "Stelposten"],
          datasets: [
            {
              label: "Usage ratio",
              fillColor: "rgba(49, 157, 181,0.2)",
              strokeColor: "#319DB5",
              pointColor: "#319DB5",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#319DB5",
              data: resultset
            }
          ]
        }
      };

      $.getJSON('/rest/usage_ratio', function (resultset) {
        window.myRadar = new Chart(document.getElementById("radar-chart").getContext("2d")).Radar(default_radar_data(resultset), {
          responsive: true,
          tooltipCornerRadius: 0
        });
      });


      /**** Line Charts: ChartJs ****/
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var lineChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
          {
            label: "My First dataset",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          },
          {
            label: "My Second dataset",
            fillColor : "rgba(49, 157, 181,0.2)",
            strokeColor : "#319DB5",
            pointColor : "#319DB5",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "#319DB5",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          }
        ]
      }
      // var ctx = document.getElementById("line-chart").getContext("2d");
      // window.myLine = new Chart(ctx).Line(lineChartData, {
      //   responsive: true,
      //   tooltipCornerRadius: 0
      // });


      /**** Pie Chart : ChartJs ****/
      $.getJSON('/rest/users_active', function (data) {
        if (data.success) {
          var ctx = document.getElementById("pie-chart").getContext("2d");
          window.myPie = new Chart(ctx).Pie(data.data, {
            tooltipCornerRadius: 0
          });
        }
      });

      $.getJSON('/rest/projects_closed', function (data) {
        if (data.success) {
          var ctx = document.getElementById("pie-chart2").getContext("2d");
          window.myPie = new Chart(ctx).Pie(data.data, {
            tooltipCornerRadius: 0
          });
        }
      });

      // var ctx = document.getElementById("pie-chart").getContext("2d");
      // window.myPie = new Chart(ctx).Pie(pieData, {
      //   tooltipCornerRadius: 0
      // });

      // var ctx2 = document.getElementById("pie-chart2").getContext("2d");
      // window.myPie = new Chart(ctx2).Pie(pieData2, {
      //   tooltipCornerRadius: 0

      // });
    
      /**** Polar Chart : ChartJs ****/
      var polarData = [
        {value: 80, color: "rgba(27, 184, 152,0.9)", highlight: "rgba(27, 184, 152,1)", label: "Green"},
        {value: 120,color: "rgba(255, 200, 112,0.9)", highlight: "rgba(255, 200, 112,1)", label: "Yellow"},
        {value: 80, color:"rgba(54, 173, 199,0.9)", highlight: "rgba(54, 173, 199,1)", label: "Blue"},
        {value: 60, color: "rgba(201, 98, 95,0.9)", highlight: "rgba(201, 98, 95,1)", label: "Red"},
        {value: 60, color: "rgba(97, 103, 116,0.9)", highlight: "rgba(97, 103, 116,1)", label: "Dark Grey"}
      ];
      var polarData2 = [
        {value: 300, color:"rgba(54, 173, 199,0.9)", highlight: "rgba(54, 173, 199,1)", label: "Blue"},
        {value: 40, color: "rgba(201, 98, 95,0.9)", highlight: "rgba(201, 98, 95,1)", label: "Red"},
        {value: 100,color: "rgba(255, 200, 112,0.9)", highlight: "rgba(255, 200, 112,1)", label: "Yellow"},
        {value: 50, color: "rgba(27, 184, 152,0.9)", highlight: "rgba(27, 184, 152,1)", label: "Green"},
        {value: 120, color: "rgba(97, 103, 116,0.9)", highlight: "rgba(97, 103, 116,1)", label: "Dark Grey"}
      ];
      // var ctx = document.getElementById("polar-chart").getContext("2d");
      // window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
      //   responsive:true,
      //   tooltipCornerRadius: 0
      // });
      // var ctx2 = document.getElementById("polar-chart2").getContext("2d");
      // window.myPolarArea = new Chart(ctx2).PolarArea(polarData2, {
      //   responsive:true,
      //   tooltipCornerRadius: 0
      // });
    

});