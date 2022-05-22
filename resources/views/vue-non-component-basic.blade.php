<html class="h-full">

    <head>
        <title> Jeffery Way Vue3 non-component code</title>
        <script src="https://unpkg.com/vue@3"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <style>

            .text-red{
                color: red;
            }

            .text-green{
                color: green;
            }

        </style>

    </head>

    <body class="h-full grid place-items-center">

        <div id="app">

            <section v-show="inProgressTasks">
                <h2 class="font-bold mb-2">In Progress:</h2>
                <ul>
                    <li
                        v-for="task in inProgressTasks"
                        :key="task.id"
                    >
                        <label>@{{ task.name }}
                            <input type="checkbox" v-model="task.complete">
                        </label>
                    </li>
                </ul>
            </section>

            <section v-show="completedTasks.length" class="mt-5">
                <h2 class="font-bold mb-2">Completed:</h2>
                <ul>
                    <li
                        v-for="task in completedTasks"
                        :key="task.id"
                    >
                        <label>@{{ task.name }}
                            <input type="checkbox" v-model="task.complete">
                        </label>
                    </li>
                </ul>
            </section>

            <pre>
                @{{ todos }}
                @{{todos.filter(task => task.complete).length}}
            </pre>

            <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded"
                    :class="active ? 'text-red' : 'text-green'" @click="toggle">
                    Click ME!
            </button>

            <p>
                <input type="text" v-model="greeting">
            </p>

            <p>
                @{{ greeting }} (@{{ greeting.length }})
            </p>
        </div>

        <script>

            let app = {

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
                    }
                },
                computed:
                {
                    completedTasks(){
                        return this.todos.filter(task => task.complete);
                    },
                    inProgressTasks()
                    {
                        return this.todos.filter(task => !task.complete);
                    }
                },

            };

            Vue.createApp(app).mount('#app');

        </script>
    </body>

</html>
