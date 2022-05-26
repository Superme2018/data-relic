<template>
    <div class="container">
        <section v-show="assignments.length">
            <h2 class="font-bold mb-2">{{ title }} <span>({{ assignments.length }})</span></h2>

            <example-assignment-tags
                :initial-tags="assignments.map(a => a.tag)"
                :current-tag="currentTag"
                @change="currentTag = $event">
            </example-assignment-tags>

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
            }
        },

    }
</script>
