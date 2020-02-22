require('./bootstrap');
window.Vue = require('vue');
import  VueRouter from 'vue-router';
Vue.use(VueRouter);
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { BootstrapVueIcons } from 'bootstrap-vue'
import 'bootstrap-vue/dist/bootstrap-vue-icons.min.css'
Vue.use(BootstrapVueIcons)

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import routes from './components/router';
const router = new VueRouter({
    routes,
    mode: 'history'
});

Vue.component('spinner', require('vue-simple-spinner'));

import App from './components/App';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



new Vue({
    router,

    render: h => h(App)
}).$mount("#app")
