<template>
    <div class="container">
        <section v-show="assignments.length">
            <h2 class="font-bold mb-2">{{ title }} <span>({{ assignments.length }})</span></h2>

            <div class="flex gap-2">
                <button
                    @click="currentTag = tag"
                    v-for="tag in tags"
                    class="border rounded px-1 py-2 text-xs"
                    :class="{
                        'border-blue-500 text-blue-500' : tag === currentTag
                    }"
                >{{ tag }}</button>
            </div>

            <ul class="border border-gray-600 divide-y divide-gray-600 mt-4">
                <example-assignment
                    v-for="task in filteredTodos"
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
        },
        data()
        {
            return {
                currentTag: 'all'
            }
        },
        computed:
        {
            filteredTodos()
            {
                if(this.currentTag === 'all')
                {
                    return this.assignments;
                }

                return this.assignments.filter(a => a.tag === this.currentTag);
            },
            tags()
            {
                return ['all', ...new Set(this.assignments.map(a => a.tag))];
            }
        },

    }
</script>
