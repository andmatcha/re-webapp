import Chart from 'chart.js/auto';

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
    by_language: [
      { id: 1, name: 'HTML', amount: 58 },
      { id: 2, name: 'CSS', amount: 82 },
      { id: 3, name: 'JavaScript', amount: 127 },
      { id: 4, name: 'PHP', amount: 278 },
      { id: 5, name: 'SQL', amount: 261 },
      { id: 6, name: 'Laravel', amount: 86 },
      { id: 7, name: 'SHELL', amount: 45 },
      { id: 8, name: '情報システム基礎知識(その他)', amount: 23 }
    ],
    by_content: [
      { id: 1, name: 'POSSE課題', amount: 430 },
      { id: 2, name: 'N予備校', amount: 74 },
      { id: 3, name: 'ドットインストール', amount: 50 }
    ]
  }
};

// レスポンスデータを加工
const processResponse = ((data) => {
  // 学習言語、学習コンテンツごとの学習時間の集計を降順にソート
  data.total.by_language = data.total.by_language.sort((a, b) => {
    return (a.amount > b.amount) ? -1 : 1;
  });
  data.total.by_content = data.total.by_content.sort((a, b) => {
    return (a.amount > b.amount) ? -1 : 1;
  });
})(sampleData);

// 日毎の学習時間棒グラフ
const barChartCtx = document.getElementById('barChartArea');
const barChart = new Chart(barChartCtx, {
  type: 'bar',
  data: {
    labels: sampleData.total.daily.map(item => item.date),
    datasets: [{
      label: '学習時間',
      data: sampleData.total.daily.map(item => item.amount),
      backgroundColor: ['#0f71ba'],
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

// 言語ごとの学習時間円グラフ
const languageChartCtx = document.getElementById('languageChartArea');
const languageChart = new Chart(languageChartCtx, {
  type: 'doughnut',
  data: {
    labels: sampleData.total.by_language.map(item => item.name),
    datasets: [{
      label: '学習言語',
      data: sampleData.total.by_language.map(item => item.amount),
      backgroundColor: ['#0544ec', '#0f70bd', '#20bdde', '#3dceff', '#b29ff2', '#6d46ea', '#4b16ef', '#3105c1']
    }]
  }
});
