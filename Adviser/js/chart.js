//DOUGNUT CHART

var xValues = ["Partner Company", "Other Company"];
var yValues = [55,15];
var barColors = [
  "blue",
  "red",
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


  //BAR CHARTS

  var xValues = ["With Company", "Without Company"];
  var yValues = [425, 55];
  var barColors = ["yellow","red"];
  
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