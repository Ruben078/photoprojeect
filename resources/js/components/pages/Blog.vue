<template>
    <div class="container">
            {{ blog }}
    </div>
</template>

<script>
    import Axios from 'axios'
    export default {
        name: 'blog',
        props: ['app'],
        data () {
            return {
                blog: null,
                req: axios.create({
                    baseUrl: BASE_URL
                })
            }
        },
        mounted() {
            axios.get("https://api.coindesk.com/v1/bpi/currentprice.json")
                .then(response => {this.results = response.data.results})
        }

    }
</script>
