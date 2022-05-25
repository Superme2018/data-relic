<template>
    <div class="container">
        <section v-show="inProgressTasks.length">
            <h2 class="font-bold mb-2">In Progress:</h2>
            <ul>
                <li
                    v-for="task in inProgressTasks"
                    :key="task.id"
                >
                    <label>{{ task.name }}
                        <input type="checkbox" v-model="task.complete">
                    </label>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
    export default {

    }
</script>
