<script>
import { Line } from 'vue-chartjs'
export default {
  extends: Line,
  props: {
    chartdata1: {
      type: Object,
      default: null
    },
    options: {
      type: Object,
      default: null
    }
  },
  mounted () {
    this.renderChart(this.chartdata1, this.options)
  }
}
</script>