<template>
    <div style="width:100%;padding:20px;background-color: #d90429;position: fixed;bottom: 0px;color:#fff;z-index: 1000;">
        {{message}}
    </div>
</template>

<style>

</style>

<script>
const Popup = {
    name: 'Popup',
    props: {
        message: String
    }
}
export default Popup
</script>