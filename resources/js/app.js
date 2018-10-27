import Vue from 'vue';
import exampleComponent from './components/ExampleComponent.vue';

require('./bootstrap');
window.Vue = require('vue');

new Vue({
    el: '#app',
    render: h => h(exampleComponent),
})