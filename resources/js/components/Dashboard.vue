<template>
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <p class="lead">Income Graph</p>
                <p class="text-muted">No data found</p>
                <p class="lead">Forecast Graph</p>
                <p class="text-muted">No data found</p>
            </div>
            <div class="col-lg-6">
                <p class="lead">My Actives Details</p>
                <table class="table table striped">
                    <tr>
                        <th>Active</th>
                        <th>Type</th>
                        <th>%</th>
                    </tr>
                    <tr>
                        <td>OFZ №1354651681</td>
                        <td>Bond</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>$TSLA</td>
                        <td>Stock</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>$SPCE</td>
                        <td>Stock</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>SBRB</td>
                        <td>Fund</td>
                        <td>40</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Dashboard',
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
