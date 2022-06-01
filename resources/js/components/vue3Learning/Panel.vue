<template>
    <div :class="{
                    'w-60 p-4 border rounded-lg' : true,
                    'bg-white border-gray-300 text-black' : theme == 'light',
                    'bg-gray-600 border-gray-600 text-white' : theme == 'dark',
                 }">
        <h2 v-if="$slots.heading" class="font-bold">
            <slot  name="heading"></slot>
        </h2>
        <p v-if="$slots.body">
            <slot name="body"></slot>
        </p>
    </div>
</template>

<script>
    export default {
        props: {
            theme: { type: String, default: 'dark' }
        }
    }
</script>
