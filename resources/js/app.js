/**
 */

import { createApp } from 'vue'
import TableComponent from './components/TableComponent.vue';

const app = createApp({});

app.component('table-component', TableComponent)
    .mount('#app');

require('./bootstrap');
