<template>
    <div class="container">
        <h1 class="mt-5">Add Task</h1>
        <router-link class="btn btn-dark mb-3" to="/tasks">
            Back
        </router-link>
        <div class="card">
            <div class="card-header">New Task</div>

            <div class="card-body">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-danger" v-if="errors.length">
                        <ul class="mb-0">
                            <li v-for="(error,index) in errors" :key="index">
                                {{ error }}
                            </li>
                        </ul>
                    </div>
                    <form v-on:submit.prevent="onSubmit">
                        <div class="form-group">
                            <b-form-input id="input-invalid" :state="null" placeholder="Invalid input"></b-form-input>
                            <input type="text" v-model="task" placeholder="Task Title" class="form-control">
                        </div>
                        <button class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'addtask',
        props: ['app'],
        data () {
          return {
              task: '',
              errors: [],
          }
        },
        methods: {
            onSubmit () {
              this.errors = [];
              if(!this.task) {
                  this.errors.push('Task Title is required');
              }
              if(!this.errors.length){
                  const data = {
                      task: this.task
                  };
                  this.app.req.post('tasks/add',data).then(response => {
                      this.$router.push('/tasks');
                  }).catch(error => {
                      this.errors.push(error.response.data.error)
                  })
              }
            }
        }
    }
</script>
