import Chart from 'chart.js/auto';
import dayjs from 'dayjs';

const startDate = dayjs().startOf('month');
const endDate = dayjs().add(1, 'month').startOf('month');
const dates = [];
let date = startDate;
while (date.isBefore(endDate)) {
  dates.push(date.date());
  date = date.add(1, 'day');
}

console.log(dates);

const ctx = document.getElementById('barChartArea');
const barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dates,
    datasets: [{
      label: "test",
      data: [1, 2, 10, 3, 5, 1, 0 , 4, 8, 1, 3, 2, 4, 2, 0 , 0, 3, 4, 5, 3, 1, 2, 1, 5, 2, 1, 4, 0, 1, 1, 4],
      backgroundColor: [],
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    layout: {
      padding: 20
    }
  }
});
