<template>
    <div class="container">

        <section class="flex gap-8">

            <example-assignment-list :assignments="filters.inProgress" title="Tasks in progress:">
                <example-assignment-create @add="add"></example-assignment-create>
            </example-assignment-list>

            <example-assignment-list
                v-show="showComplete"
                :assignments="filters.completed"
                title="Tasks Completed:"
                can-hide
                @hideList="showComplete = !showComplete">
            </example-assignment-list>

        </section>

        <pre>
            {{ todos }}
            {{todos.filter(task => task.complete).length}}
        </pre>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded"
                :class="active ? 'text-red' : 'text-green'" @click="toggle">
                Click ME!
        </button>

    <p>
        <input type="text" v-model="greeting">
    </p>

    <p>
        {{ greeting }} ({{ greeting.length }})
    </p>
    </div>
</template>

<script>

    export default {
        created()
        {
            fetch('http://data-relic.local/data-source')
                .then(response => response.json())
                .then(todos => {
                    this.todos = todos;
                })
        },
        data(){
            return {
                greeting: 'hello world!',
                buttonClasse: 'text-green',
                active: false,
                todos: [],
                showComplete: true
            };
        },
        mounted() {
            setTimeout(() => {
                this.greeting = "Changed";
            }, 3000);
        },
        methods:
        {
            toggle(){
                this.active = !this.active;
            },
            add(name)
            {
                this.todos.push({
                    name: name,
                    complete: false,
                    id: this.todos.length + 1,
                })
            }

        },
        computed:
        {
            filters()
            {
                return {
                    inProgress: this.todos.filter(task => task.complete),
                    completed: this.todos.filter(task => !task.complete)
                }
            }
        },
    }
</script>
