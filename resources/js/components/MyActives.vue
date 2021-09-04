<template>
    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <p class="lead">Stocks</p>
                <table class="table table-striped">
                    <tr>
                        <th>ISIN</th>
                        <th>Current Price</th>
                        <th>Portfolio Price</th>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4">
                <p class="lead">Funds</p>
                <table class="table table-striped">
                    <tr>
                        <th>ISIN</th>
                        <th>Current Price</th>
                        <th>Portfolio Price</th>
                    </tr>
                    <tr>
                        <td>$SPCE</td>
                        <td>$25</td>
                        <td>$20 <br><span class="text-success">(+25%)</span></td>
                    </tr>
                    <tr>
                        <td>$TSLA</td>
                        <td>$500</td>
                        <td>$400 <br><span class="text-danger">(-20%)</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4">
                <p class="lead">Bonds</p>
                <table class="table table-striped">
                    <tr>
                        <th>ISIN</th>
                        <th>Current Price</th>
                        <th>Portfolio Price</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MyActives"
}
</script>

<style scoped>

</style>
