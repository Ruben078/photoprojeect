<template>
    <div class="container">
       <div class="d-flex align-items-center justify-content-between">
           <h1 class="mt-5">Tasks</h1>
           <router-link class="btn btn-danger mt-5" to="/addtask">
               Add New Task
           </router-link>
       </div>
        <ul v-if="!loading" class="list-group">
            <TaskItem :init="init" v-for="(task,index) in tasks" :task="task" :key="index" />
        </ul>
        <spinner v-if="loading"></spinner>

        <div v-if="!tasks">
            No Tasks...
        </div>


    </div>
</template>
<script>
    import TaskItem from "./TaskItem";
    export default {
        name: 'tasks',
        components: {
          TaskItem
        },
        data () {
            return {
                loadingImgUrl: 'img/loading.svg',
                tasks: null,
                loading: false,
                initiated: false,
                req: axios.create({
                    baseUrl: BASE_URL
                })
            }
        },
        mounted () {
            this.init();
        },
        methods: {
            init () {
                this.loading = true;
                this.req.get('tasks/init').then(response => {
                    this.tasks = response.data.tasks
                    this.loading = false;
                    this.initiated = true;
                })
            },

        }
    }
</script>
