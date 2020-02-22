<template>
    <div class="profile_left_bar">
        <img src="https://photographers.am/users/1580901713.jpg" alt="">
        <h2>Ruben Gabrielyan</h2>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="">
                    <div class="h2 mb-0 geo-icon">
                        <b-icon-geo></b-icon-geo>
                    </div>
                </div>
                <div class="col-6">
                    <div class="profile_left_bar_geo">Երևան</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <router-link class="btn btn-outline-secondary mt-3" to="/my/settings">Կարգավորումներ  <b-icon-gear></b-icon-gear>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'leftbar'
    }
</script>

<style scoped>
    .profile_left_bar {
        background: white;
        margin: 2rem 0;
        padding: 1rem;
        border-radius: 6px;
        box-shadow: 1px 1px 12px -10px;
        position: relative;
    }
    img {
        width: 50%;
        margin: 0 auto;
        display: block;
        border-radius: 50%;
        margin-top: 2rem;
    }
    h2 {
        text-align: center;
        font-size: 20px;
        margin-top: 1rem;
    }
    .dots-icon {
        position: absolute;
        top: 0;
        right: 1rem;
    }
    .profile_left_bar_geo {
        font-family:FontRegular;
    }
</style>
