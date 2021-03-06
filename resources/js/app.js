/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
    { path: '/', component: require('./components/HomeComponent.vue').default },
    { path: '/gallery', component: require('./components/GalleryComponent').default },
    { path: '/contact', component: require('./components/ContactComponent').default },
    { path: '/shows', component: require('./components/ShowsComponent').default }
]

const router = new VueRouter({
    mode: 'history',    
    routes
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('gallery-component', require('./components/GalleryComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('shows-component', require('./components/ShowsComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
