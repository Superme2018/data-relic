<template>
    <li>
        <label>{{ task.name }}
            <input type="checkbox" v-model="task.complete">
        </label>
    </li>
</template>

<script>
    export default {
        props: {
            task: Object,
        }
    }
</script>
