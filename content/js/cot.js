const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
const yArray = [55, 49, 44, 24, 15];

const layout = {title:"World Wide Wine Production"};

const data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);


const xArray1 = ["Italy", "France", "Spain", "USA", "Argentina"];
const yArray1 = [55, 49, 44, 24, 15];

const layout1 = {title:"World Wide Wine Production"};

const data1 = [{labels:xArray1, values:yArray1, hole:.4, type:"pie"}];

Plotly.newPlot("myPlot1", data1, layout1);
const xArray2 = [55, 49, 44, 24, 15];
const yArray2 = ["Italy ", "France ", "Spain ", "USA ", "Argentina "];

const data2 = [{
  x:xArray2,
  y:yArray2,
  type:"bar",
  orientation:"h",
  marker: {color:"rgba(255,0,0,0.6)"}
}];

const layout2 = {title:"World Wide Wine Production"};

Plotly.newPlot("myPlot2", data2, layout2);
//


//

