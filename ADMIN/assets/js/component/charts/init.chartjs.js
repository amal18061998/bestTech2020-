"use strict";var ChartjsDemo={init:function(){!function(){if($("#line-chart").length){var a=document.getElementById("line-chart").getContext("2d");new Chart(a,{type:"line",data:{labels:["Mon","Tue","Wen","Thu","Fri","Sat","Sun"],datasets:[{label:"Google",data:[13,20,4,18,7,4,8],backgroundColor:"rgba(235,59,90, 0.5)",borderColor:"rgba(235,59,90)",borderWidth:1},{label:"Facebook",data:[3,30,6,6,3,4,11],backgroundColor:"rgba(23,162,184, 0.5)",borderColor:"rgba(23,162,184)",borderWidth:1}]}})}$("#bar-chart").length&&(a=document.getElementById("bar-chart").getContext("2d"),new Chart(a,{type:"bar",data:{labels:["Mon","Tue","Wen","Thu","Fri","Sat","Sun"],datasets:[{label:"Google",data:[13,20,4,18,29,25,8],backgroundColor:"#6900ff"},{label:"Facebook",data:[31,30,6,6,21,4,11],backgroundColor:"#20bf6b"}]}})),$("#radar-chart").length&&(a=document.getElementById("radar-chart"),new Chart(a,{type:"radar",data:{labels:["Mo","Tu","We","Th","Fr","Sa","Su"],datasets:[{label:"Twitter",backgroundColor:"rgba(34, 48, 53, 0.5)",borderColor:"#4b6584",data:[13,20,4,18,29,25,8]},{label:"Linkedin",backgroundColor:"rgba(255, 151, 0, 0.5)",borderColor:"#ff8840",data:[31,30,6,6,21,4,11]}]}})),$("#polar-chart").length&&(a=document.getElementById("polar-chart").getContext("2d"),new Chart(a,{type:"polarArea",data:{labels:["Primary","Success","Danger","Warning"],datasets:[{backgroundColor:["#4b7bec","#20bf6b","#eb3b5a","#ff8840"],data:[13,20,11,18]}]}})),$("#pie-chart").length&&(a=document.getElementById("pie-chart").getContext("2d"),new Chart(a,{type:"pie",data:{labels:["Info","Dark","Danger","Secondary"],datasets:[{backgroundColor:["#17a2b8","#4b6584","#fed330","#8854d0"],data:[13,20,11,18]}]}})),$("#doughnut-chart").length&&(a=document.getElementById("doughnut-chart").getContext("2d"),new Chart(a,{type:"doughnut",data:{labels:["Info","Success","Danger","Dark"],datasets:[{backgroundColor:["#8854d0","#20bf6b","#eb3b5a","#4b6584"],data:[13,20,11,18]}]}}))}()}};$(document).ready(function(){ChartjsDemo.init()});
//# sourceMappingURL=init.chartjs.js.map