import Vue from 'vue';

import PersonComponent from "./components/PersonComponent";

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components:{
        PersonComponent
    }
});
