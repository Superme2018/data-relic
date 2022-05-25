<template>
    <div class="container">
        <button
            :class="{
                'font-bold py-2 px-4 rounded disabled:cursor-not-allowed' : true,
                'bg-blue-500 hover:bg-blue-700': type === 'primary',
                'bg-green-500 hover:bg-blue-700': type === 'secondary',
                'bg-gray-500 hover:bg-blue-700': type === 'muted',
                'is-loading': processing
            }"
            :disabled="processing" >
            <slot />
        </button>
    </div>
</template>

<script>
    export default {
        props: {

            type: {
                type: String,
                default: "muted"
            },

            processing: {
                type: Boolean,
                default: false
            }

        },
        // data() {
        //     return {
        //        processing: false
        //     }
        // },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
