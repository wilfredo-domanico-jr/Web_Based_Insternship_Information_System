



//DOUGNUT CHART

var xValues = ["Partner Company", "Other Company"];
var yValues = [55,15];
var barColors = [
  "#b91d47",
  "#00aba9",
];



new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Company Type"
    }
  }
});


//   //BAR CHARTS

  var xValues = ["With Company", "Without Company"];
  var yValues = [55, 5];
  var barColors = ["red","blue"];
  
  new Chart("internChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "Intern Status"
      }
    }
  });


//  <canvas id="internChart" style="width:100%;max-width:700px"></canvas>