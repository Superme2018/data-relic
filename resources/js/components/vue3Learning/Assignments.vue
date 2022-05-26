<template>
    <div class="container">

        <section class="space-y-5">
            <example-assignment-list :assignments="filters.inProgress" title="Tasks in progress:"></example-assignment-list>
            <example-assignment-list :assignments="filters.completed" title="Tasks Completed:"></example-assignment-list>

            <example-assignment-create @add="add"></example-assignment-create>

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
        data(){
            return {
                greeting: 'hello world!',
                buttonClasse: 'text-green',
                active: false,
                todos: [
                    { name: 'Wash Car', complete: false, id: 1 },
                    { name: 'Get cat litter', complete: false, id: 2  },
                    { name: 'Do more code', complete: false, id: 3  }
                ]
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
