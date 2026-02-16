<template>
  <div class="bg-white p-4 rounded shadow">
    <h3 class="font-semibold mb-2">{{ title }}</h3>
    <LineChart :chart-data="chartData" :chart-options="chartOptions" />
  </div>
</template>

<script setup>
import { Line } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, LineElement, CategoryScale, LinearScale, PointElement } from 'chart.js'
import { reactive } from 'vue'

ChartJS.register(Title, Tooltip, Legend, LineElement, CategoryScale, LinearScale, PointElement)

const props = defineProps({
  title: String
})

const chartData = reactive({
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
  datasets: [
    {
      label: 'Sales',
      data: [1200, 1900, 1500, 1700, 2000],
      borderColor: 'rgba(34,197,94,1)',
      backgroundColor: 'rgba(34,197,94,0.2)',
      tension: 0.4
    }
  ]
})

const chartOptions = {
  responsive: true,
  plugins: { legend: { display: true } }
}
</script>
