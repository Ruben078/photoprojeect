<template>
    <div>
        <Navbar :app="this" class="mb-2"></Navbar>
        <spinner v-if="loading"></spinner>
        <div v-else-if="initiated">
            <router-view :app="this"/>
        </div>
        <Footer />
    </div>
</template>

<script>
    import Navbar from "./Navbar";
    import Footer from "./Footer";
    export default {
        name: 'app',
        components: {
            Footer,
            Navbar
        },
        data () {
            return {
                user: null,
                loading: false,
                initiated: false,
                req: axios.create({
                    baseUrl: BASE_URL
                })
            }
        },
        mounted() {
            this.init();
        },
        methods: {
            init() {
                this.loading = true;
                this.req.get('auth/init').then(response => {
                    this.user = response.data.user;
                    this.loading = false;
                    this.initiated = true;
                })
            }
        }
    }
</script>
