<template>
    <div class="flex gap-2">
        <button
            @click="$emit('update:currentTag', tag)"
            v-for="tag in tags"
            class="border rounded px-1 py-2 text-xs"
            :class="{
                'border-blue-500 text-blue-500' : tag === currentTag
            }"
        >{{ tag }}</button>
    </div>
</template>

<script>
    export default {
        props: {
            initialTags: Array,
            currentTag: String
        },
        computed: {
            tags()
            {
                // Need to get my head round this.
                return ['all', ...new Set(this.initialTags)];
            }
        }
    }
</script>
