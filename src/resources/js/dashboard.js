import Chart from 'chart.js/auto';
import axios from 'axios';

const BASE_URL = 'http://localhost:80/api'
const donutChartBackgroundColor = ['#0544ec', '#0f70bd', '#20bdde', '#3dceff', '#b29ff2', '#6d46ea', '#4b16ef', '#3105c1'];

const jsonGet = async () => {
  try {
    const res = await axios.get(`${BASE_URL}/records`, {
      params: {
        user_id: 1,
        year: 2022,
        month: 10
      }
    });
    return res.data;
  } catch (err) {
    console.error(err);
  }
}

window.onload = async () => {
  const data = await jsonGet();

  // 日毎の学習時間棒グラフ
  const barChartCtx = document.getElementById('barChartArea');
  const barChart = new Chart(barChartCtx, {
    type: 'bar',
    data: {
      labels: data.total.daily.map(item => item.day),
      datasets: [{
        label: '学習時間',
        data: data.total.daily.map(item => item.amount),
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
      labels: data.total.by_language.map(item => item.name),
      datasets: [{
        label: '学習言語',
        data: data.total.by_language.map(item => item.amount),
        backgroundColor: donutChartBackgroundColor
      }]
    }
  });

  // コンテンツごとの学習時間円グラフ
  const contentChartCtx = document.getElementById('contentChartArea');
  const contentChart = new Chart(contentChartCtx, {
    type: 'doughnut',
    data: {
      labels: data.total.by_content.map(item => item.name),
      datasets: [{
        label: '学習コンテンツ',
        data: data.total.by_content.map(item => item.amount),
        backgroundColor: donutChartBackgroundColor
      }]
    }
  });
};
