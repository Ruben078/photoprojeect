<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="register_login">
                    <h3 class="mb-3">Մուտք</h3>
                    <form v-on:submit.prevent="onSubmit">
                        <div class="form-group">
                            <label>Էլ․հասցե</label>
                            <b-form-input  :state="emailError" v-model="email"></b-form-input>
                        </div>
                        <div class="form-group">
                            <label>Գաղտնաբառ</label>
                            <b-form-input type="password" :state="passwordError"  v-model="password"></b-form-input>
                        </div>
                        <button class="btn btn-primary d-block">Մուտք</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'login',
        props: ['app'],
        data () {
            return {
                email: '',
                password: '',
                errors: [],
                emailError: null,
                passwordError: null
            }
        },
        methods: {
            onSubmit () {
                this.errors = [];

                if(!this.email) {
                    this.errors.push('Email is required');
                    this.emailError = false;
                } else {
                    this.emailError = true;
                }
                if(!this.password) {
                    this.errors.push('Password is required');
                    this.passwordError = false;
                } else {
                    this.passwordError = true;
                }



                if(!this.errors.length) {
                    const data = {
                        name: this.name,
                        email: this.email,
                        password: this.password
                    }
                    this.app.req.post('auth/login', data).then(response => {
                        this.app.user = response.data;
                        this.$router.push('/my');
                    }).catch(error => {
                        this.errors.push(error.response.data.error);
                    })
                }
            }
        }
    }
</script>
<style scoped>
    form {
        margin-top: 2rem;
    }
    .form-control:focus{
        box-shadow: transparent !important;
    }
    .register_login {
        padding: 2.1875rem 1.25rem 2.8125rem;
        box-shadow: 0 1px 10px rgba(0,0,0,.07);
        background-color: #fff;
        margin: 50px auto;
    }
    button {
        width: 100%;
    }
</style>
