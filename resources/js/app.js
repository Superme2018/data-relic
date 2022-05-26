/**
 * VUE 3 .. a note here, Laravel 9 defaults with vue2.
 */

import { createApp } from 'vue'

// Vue components.
import TableComponent from './components/TableComponent.vue';
import ExampleComponent from './components/vue3Learning/ExampleComponent.vue';
import Assignment from './components/vue3Learning/Assignment.vue';
import Assignments from './components/vue3Learning/Assignments.vue';
import AssignmentList from './components/vue3Learning/AssignmentList.vue';
import AssignmentCreate from './components/vue3Learning/AssignmentCreate.vue';

const app = createApp({});

app.component('table-component', TableComponent)
   .component('example-component', ExampleComponent)
   .component('example-assignment', Assignment)
   .component('example-assignments', Assignments)
   .component('example-assignment-list', AssignmentList)
   .component('example-assignment-create', AssignmentCreate)
   .mount('#app');

require('./bootstrap');
