<template>
    <div class="">
        <div>
            <b-navbar toggleable="lg">
                <div class="container">
                    <b-navbar-brand>
                        <router-link to="/" class="nav-link">Photographers.am</router-link>
                    </b-navbar-brand>

                    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                    <b-collapse id="nav-collapse" is-nav>
                        <b-navbar-nav>
                            <b-nav-item>
                                <router-link to="/" class="nav-link text-dark">
                                    Լուսանկարիչներ
                                </router-link>
                            </b-nav-item>
                            <b-nav-item>
                                <router-link to="/tasks" class="nav-link text-dark">
                                    Լուսանկարներ
                                </router-link>
                            </b-nav-item>
                        </b-navbar-nav>

                        <!-- Right aligned nav items -->
                        <b-navbar-nav class="ml-auto">
                            <b-nav-item-dropdown right v-if="app.user">
                                <!-- Using 'button-content' slot -->
                                <template v-slot:button-content>
                                    {{ app.user ? app.user.name : 'Account' }}
                                </template>
                                <b-dropdown-item v-if="!app.user">
                                    <router-link to="/login" class="dropdown-item">Գրանցվել</router-link>
                                    <router-link to="/register" class="dropdown-item">Մուտք</router-link>
                                </b-dropdown-item>
                                <b-dropdown-item v-if="app.user">
                                    <router-link class="dropdown-item" to="/my">Իմ էջ</router-link>
                                </b-dropdown-item>
                                <b-dropdown-item v-if="app.user">
                                    <a @click="logout" href="javascript:;" class="dropdown-item">Դուրս գալ</a>
                                </b-dropdown-item>
                            </b-nav-item-dropdown>
                           <div v-else class="d-flex">
                               <b-nav-item>
                                   <router-link class="nav-link" to="/register">Գրանցվել</router-link>
                               </b-nav-item>
                               <b-nav-item>
                                   <router-link to="/login" class="nav-link">Մուտք</router-link>
                               </b-nav-item>
                           </div>
                        </b-navbar-nav>
                    </b-collapse>
                </div>
            </b-navbar>
        </div>

    </div>
</template>
<script>
    export default {
        name: 'navbar',
        props: ['app'],
        data() {
            return {}
        },
        methods: {
            logout() {
                this.app.req.post('auth/logout').then(() => {
                    this.app.user = null;
                    this.$router.push('/login');
                })
            }
        }
    }
</script>
