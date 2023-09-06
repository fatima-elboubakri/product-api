import Vue from 'vue';
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history', // Utilise le mode history pour éviter le hash dans l'URL
    routes
});

new Vue({
    el: '#app',
    router
});
