import Vue from 'vue';
import VueRouter from 'vue-router';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Index from './views/Index.vue';

const router = new VueRouter({
  routes: [
    { path: '/', component: Index },
    { path: '/foo', component: Index }
  ]
});

require('./bootstrap');

Vue.config.devtools = true;
Vue.config.performance = true;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Admin from './components/Admin.vue';

const app = new Vue({
  el: '#admin',
  router,
  components: {
    Admin
  },
  render: h => h(Admin)
});
