//DOUGNUT CHART

var xValues = ["IT Department", "HR Department"];
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
      text: "Intern Departments",
      fontColor:"red"
    }
  }
});


  //BAR CHARTS

  var xValues = ["With Certificate", "Without Certificate"];
  var yValues = [55, 0];
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
        text: "Certificates"
      }
    }
  });