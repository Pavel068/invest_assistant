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

        <label class="mt-3" for="invest_profile">Email notifications</label>
        <select name="notifications" id="notifications" class="form-control">
            <option value="0">Never</option>
            <option value="1">Every day</option>
            <option value="7">Every week</option>
            <option value="30">Every month</option>
        </select>

        <label class="mt-3" for="notifications_email">Notification email</label>
        <input type="text" class="form-control" name="notifications_email" id="notifications_email">

        <button class="mt-3 btn btn-success">Save</button>
    </div>
</template>

<script>
export default {
    name: "Analytics"
}
</script>

<style scoped>

</style>
