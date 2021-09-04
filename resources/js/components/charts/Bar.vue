<script>
import { Bar } from 'vue-chartjs'

export default {
    extends: Bar,
    props: {
        chartData: {
            type: Object,
            default: null
        }
    },
    data() {
        return {
            options: {
                responsive: false,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        }
    },
    mounted() {
        this.renderChart(this.chartData, this.options)
    }
}
</script>
