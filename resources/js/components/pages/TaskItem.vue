<template>
    <div>

        <li class="list-group-item mt-1 d-flex justify-content-between align-items-center">
            <div v-bind:class="task.completed">{{task.task}}</div>
           <div>
               <button @click="completed(task.id)" class="btn btn-outline-danger"><img :src="dltImgUrl" width="25px" alt=""></button>
               <button @click="edit(task.id)" class="btn btn-outline-danger"><img :src="compUrl" width="25px" alt=""></button>
           </div>
        </li>
    </div>
</template>
<script>
    export default {
        name: 'taskitem',
        props: ['app','task','init'],
        data () {
            return {
                active: this.task.completed,
                loading: false,
                req: axios.create({
                    baseUrl: BASE_URL
                }),
                dltImgUrl: '/img/delete.png',
                compUrl: '/img/comp.png'
            }
        },
        methods: {
            completed(id) {
                const data = {
                    id: id
                };
                this.loading = true,
                this.req.post('tasks/delete',data).then(response => {
                    this.$nextTick(function(){
                        this.init();
                    })
                }).catch(error => {

                })
            },
            edit (id) {
                const data = {
                    id: id
                };
                this.loading = true,
                    this.req.post('tasks/edit',data).then(response => {
                        this.$nextTick(function(){
                            this.init();
                        })
                    }).catch(error => {
                        console.log(error)
                    })
            }
        }
    }
</script>

<style scoped>
    .true {
        text-decoration: line-through
    }
</style>
