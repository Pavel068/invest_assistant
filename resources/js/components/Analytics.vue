<template>
    <div class="content">
        <label for="invest_profile">Choose invest profile</label>
        <select name="invest_profile" id="invest_profile" class="form-control">
            <option value="ultra_conservative">Ultra Conservative</option>
            <option value="conservative">Conservative</option>
            <option value="balanced">Balanced</option>
            <option value="aggressive">Aggressive</option>
            <option value="ultra_aggressive">Ultra Aggressive</option>
        </select>

        <p class="lead mt-3">Investing profile actives analyze</p>
        <table class="table table-striped">
            <tr>
                <th>Active</th>
                <th>Type</th>
                <th>Prefer invest profile</th>
            </tr>
            <tr class="bg-danger">
                <td>$SPCE</td>
                <td>Stock</td>
                <td>Ultra Aggressive</td>
            </tr>
            <tr class="bg-warning">
                <td>$TSLA</td>
                <td>Stock</td>
                <td>Aggressive</td>
            </tr>
            <tr class="bg-success">
                <td>OFZ №13414124124</td>
                <td>Bond</td>
                <td>Ultra Conservative</td>
            </tr>
        </table>

        <p class="lead mt-3">Actives recommendations</p>
        <table class="table table-striped">
            <tr>
                <th>Active</th>
                <th>Current Price</th>
                <th>Consensus Forecast Price</th>
                <th>Portfolio Average Price</th>
                <th>Decision</th>
                <th>Reason</th>
            </tr>
            <tr>
                <td>$TSLA</td>
                <td>$700 <br/> <span class="text-success">(+40%)</span></td>
                <td>$1000 <br/> <span class="text-success">(+100%)</span></td>
                <td>$500</td>
                <td class="text-success text-uppercase">Sold</td>
                <td>You have exceeded the threshold of profitability for the specified type of investment profile</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "Analytics"
}
</script>

<style scoped>

</style>
