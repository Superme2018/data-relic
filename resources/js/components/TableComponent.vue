<template>
  <hot-table
    :settings="hotSettings">
  </hot-table>
</template>

<script>
  import { defineComponent } from 'vue';
  import { HotTable } from '@handsontable/vue3';
  import { registerAllModules } from 'handsontable/registry';
  import 'handsontable/dist/handsontable.full.css';

  // register Handsontable's modules
  registerAllModules();

  export default defineComponent({
    data() {
      return {
        hotSettings: {
            licenseKey: 'non-commercial-and-evaluation',
            height: 'auto',
            rowHeaders: true,
            columnSorting: true,
            filters: true,
            dropdownMenu: ['filter_by_condition', 'filter_action_bar', 'filter_by_value'],
            colHeaders: ['Brand', 'Model', 'Code name', 'Country of origin'],
            data: [
                ['Tesla', 'Model 3', 'BlueStar', 'USA'],
                ['Tesla', 'Model S', 'WhiteStar', 'USA'],
                ['Mitsubishi', 'iMiEV', '', 'Japan'],
                ['Ford', 'Focus EV', '', 'USA'],
                ['Mitsubishi', 'iMiEV Sport', '', 'Japan'],
                ['Tesla', 'Roadster', 'DarkStar', 'USA'],
                ['Volkswagen', 'e-Golf','', 'Germany'],
                ['Volkswagen', 'E-Up!', '', 'Germany'],
                ['Ford', 'C-Max Energi', '', 'USA'],
                ['BYD', 'Denza', '', 'China'],
                ['BYD', 'e5', '', 'China'],
                ['BYD', 'e6', '', 'China']
            ],
            columns: [
                { type: 'text' },
                { type: 'text' },
                { type: 'text' },
                { type: 'text' },
            ],
        }
      };
    },
    components: {
      HotTable,
    }
  });
</script>
