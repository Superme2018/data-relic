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
import AssignmentTags from './components/vue3Learning/AssignmentTags.vue';
import AssignmentPanel from './components/vue3Learning/Panel.vue';

import HomeModule from './components/data_relic/HomeModule.vue';

const app = createApp({});

app.component('table-component', TableComponent)
   .component('example-component', ExampleComponent)
   .component('example-assignment', Assignment)
   .component('example-assignments', Assignments)
   .component('example-assignment-list', AssignmentList)
   .component('example-assignment-create', AssignmentCreate)
   .component('example-assignment-tags', AssignmentTags)
   .component('example-assignment-panel', AssignmentPanel)

   .component('data-relic-module-home', HomeModule)
   .mount('#app');

require('./bootstrap');
