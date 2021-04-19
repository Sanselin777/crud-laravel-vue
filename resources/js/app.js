

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
   { name:'home', path:'/', component: require('./components/WelcomeComponent.vue').default},
   { name:'add', path:'/add', component: require('./components/AddCustomer.vue').default},
   { name:'edit',path:'/edit/:id', component: require('./components/EditCustomer.vue').default}
]

const router = new VueRouter({
    routes:routes,
    mode:"history"
})



Vue.component('principal-component', require('./components/PrincipalComponent.vue').default);



const app = new Vue({
    el:'#app',
    router
})
