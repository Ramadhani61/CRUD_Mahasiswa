<script>
import { Pie } from 'vue-chartjs'
export default {
  extends: Pie,
  props: {
    chartdata2: {
      type: Object,
      default: null
    },
    options: {
      type: Object,
      default: null
    }
  },
  mounted () {
    this.renderChart(this.chartdata2, this.options)
  }
}
</script>