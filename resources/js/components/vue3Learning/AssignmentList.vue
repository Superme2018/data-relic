<template>
    <div class="container">
        <section v-show="assignments.length">
            <h2 class="font-bold mb-2">{{ title }}</h2>
            <ul>
                <example-assignment
                    v-for="task in assignments"
                    :key="task.id"
                    :task="task">
                </example-assignment>
            </ul>
        </section>
    </div>
</template>

<script>
    export default {
        props: {
            assignments: Array,
            title: String
        }
    }
</script>
