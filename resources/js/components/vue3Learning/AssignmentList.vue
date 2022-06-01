<template>
    <div class="container">
        <section v-show="assignments.length" class="w-60 bg-gray-700 p-4 border border-gray-600 rounded-l">

            <div class="flex justify-between items-start">
                <h2 class="font-bold mb-2">
                    {{ title }}
                    <span>({{ assignments.length }})
                    </span>
                </h2>
                <button v-show="canHide" @click="$emit('hideList')">&times;</button>
            </div>

            <example-assignment-tags
                v-model:currentTag="currentTag"
                :initial-tags="assignments.map(a => a.tag)"
                @change="currentTag = $event">
            </example-assignment-tags>

            <ul class="border border-gray-600 divide-y divide-gray-600 mt-4">
                <example-assignment
                    v-for="task in filteredTodos"
                    :key="task.id"
                    :task="task">
                </example-assignment>
            </ul>

            <slot></slot>

        </section>
    </div>
</template>

<script>
    export default {
        props: {
            assignments: Array,
            title: String,
            canHide: { type: Boolean, default: false }
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
