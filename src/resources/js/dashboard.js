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

const sampleData = {
  user_id: 1,
  year: 2022,
  month: 10,
  total: {
    daily: [
      { date: 1, amount: 1 },
      { date: 2, amount: 4 },
      { date: 3, amount: 6 },
      { date: 4, amount: 1 },
      { date: 5, amount: 8 },
      { date: 6, amount: 5 },
      { date: 7, amount: 9 },
      { date: 8, amount: 2 },
      { date: 9, amount: 4 },
      { date: 10, amount: 3 },
      { date: 11, amount: 6 },
      { date: 12, amount: 3 },
      { date: 13, amount: 1 },
      { date: 14, amount: 0 },
      { date: 15, amount: 5 },
      { date: 16, amount: 8 },
      { date: 17, amount: 1 },
      { date: 18, amount: 0 },
      { date: 19, amount: 2 },
      { date: 20, amount: 9 },
      { date: 21, amount: 6 },
      { date: 22, amount: 3 },
      { date: 23, amount: 1 },
      { date: 24, amount: 1 },
      { date: 25, amount: 6 },
      { date: 26, amount: 1 },
      { date: 27, amount: 3 },
      { date: 28, amount: 2 },
      { date: 29, amount: 0 },
      { date: 30, amount: 0 },
      { date: 31, amount: 1 }
    ],
    by_content: [
      { id: 1, name: 'POSSE課題', amount: 430 },
      { id: 2, name: 'N予備校', amount: 74 },
      { id: 3, name: 'ドットインストール', amount: 50 }
    ],
    by_language: [
      { id: 1, name: 'HTML', amount: 58 },
      { id: 2, name: 'CSS', amount: 82 },
      { id: 3, name: 'JavaScript', amount: 127 },
      { id: 4, name: 'PHP', amount: 278 },
      { id: 5, name: 'SQL', amount: 261 },
      { id: 6, name: 'Laravel', amount: 86 },
      { id: 7, name: 'SHELL', amount: 45 },
      { id: 8, name: '情報システム基礎知識(その他)', amount: 23 }
    ]
  }
};

const ctx = document.getElementById('barChartArea');
const barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dates,
    datasets: [{
      label: "学習時間",
      data: sampleData.total.daily.map(item => item.amount),
      backgroundColor: ["#0f71ba"],
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
