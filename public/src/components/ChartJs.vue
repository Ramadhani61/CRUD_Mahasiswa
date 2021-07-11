<template>
  <div class="container">
    <!-- <canvas id="planet-chart"></canvas> -->
    <chart-view v-if="loaded" :chartdata="chartdata" :options="options"></chart-view>
<br><br>
    <chart-line v-if="loaded" :chartdata1="chartdata1" :options="options"></chart-line>
  </div>
</template>

<script>
// import {line} from 'chart.js'
import ChartView from "./ChartView.vue";
import ChartLine from "./ChartLine.vue";
import axios from "axios";
export default {
  components: {
    ChartView,
    ChartLine
  },
  data: () => ({
    chartdata: null,
    chartdata1: null,
    options: null,
    loaded: false
  }),
  async mounted() {
    this.loaded = false;
    await axios
      .get("http://localhost:8000/api/charts")
      .then(res => {
        console.log(res);
        this.loaded = true;
        this.chartdata = {
          labels: ["A", "Ab", "B", "Bc", "C", "D", "E"],
          datasets: [
            {
              label: "Bar Chart",
              data: [10, 5, 3, 7, 9, 6, 4],
            //   data: [res.data.nilai, res.data.nilai2], untuk get rest api tapi masih stuck cara count tiap element array
              backgroundColor: [
                "rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)","rgba(255, 0, 0, 1)"
                
              ],
              borderColor: [
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)"
              ],
              borderWidth: 1
            }
          ]
        };
        this.chartdata1 = {
          labels: ["A", "Ab", "B", "Bc", "C", "D", "E"],
          datasets: [
            {
              label: "Line Chart",
              data: [10, 5, 3, 7, 9, 6, 4],
            //   data: [res.data.nilai, res.data.nilai2], untuk get rest api tapi masih stuck cara count tiap element array
              backgroundColor: [
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)",
                "rgba(255, 0, 0, 0.1)"
                
              ],
              borderColor: [
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)",
                "rgba(255, 0, 0, 0.8)"
              ],
              borderWidth: 3
            }
          ]
        };
        this.options = {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ]
          },
          maintainAspectRatio: false,
          title: {
            display: true,
            text: "Statistik Nilai Algoritma"
          }
        };
      })
      .catch(err => {
        console.log(err);
      });
  }
};
</script>