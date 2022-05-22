
<template>
    <div class="datatable">

    </div>
</template>

<script>


    import Handsontable from 'handsontable';
    import 'handsontable/dist/handsontable.full.css';
    //import { onMounted, ref } from 'vue';

    const fields = [
    {
        label: 'First Name',
        key: 'first_name',
        validators: [{ validate: 'required' }],
    },
    {
        label: 'Last Name',
        key: 'last_name',
        validators: [{ validate: 'required' }],
    },
    {
        label: 'Email Address',
        key: 'email',
        validators: [
        { validate: 'required' },
        { validate: 'email', error: 'Must be in email format' },
        ],
    },
    ];

    const data  =  [
    { email: '123', last_name: 'ABC' },
    { email: 'will.julian-vicary@clarity.pr', first_name: 'Will', last_name: 'Julian-Vicary' }
    ];

    export default {

        props: { headers: { type: Array, default: fields.map(field => field.label) } },
        setup(props) {
            const headers = ref(props.headers);

            onMounted(() => {

                const container = document.getElementById('datatable');

                const hot = new Handsontable(container, {
                    rowHeaders: true,
                    colHeaders: headers.value,
                    startRows: 100,
                    stretchH: 'all',
                    height: '20em',
                    licenseKey: 'non-commercial-and-evaluation', // for non-commercial use only
                    manualColumnResize: true,
                    columns: fields.map((field) => {
                    return {
                        data: field.key,
                        validator: validate(field.validators)
                    };
                    })
                });

            });
        }
    }
</script>

