<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <Leftbar />
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="https://photographers.am/photos/1580903506.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Leftbar from "../Home/LeftBar";
    export default {
        components: {Leftbar},
        props: ['app'],
    }
</script>
<style scoped>
    .col-md-4 img {
        border-radius: 6px;
    }
</style>
