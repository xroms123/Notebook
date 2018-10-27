
require('./bootstrap');

window.Vue = require('vue');

// 將 ./components/ExampleComponent.vue 匯入, 並命名為 example-component
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',     //要掛載的元素id名稱(在blade檔內 id = "app")
});
