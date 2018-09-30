var ctx = $("#audCharts");

new Chart(ctx, {
  type: 'doughnut',
  data: {
        labels: ["1° Semana", "2° Semana", "3° Semana", "4° Semana"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: ['rgb(244, 67, 54)', 'rgb(3, 169, 244)', 'rgb(255, 235, 59)', 'rgb(76, 175, 80)'],
            data: [100, 170, 120, 30],
        }]
    }
})
