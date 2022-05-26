<template>
  <form @submit.prevent="emitAdd">
        <div class="border border-gray-600  text-black">
        <input v-model="newAssignment" placeholder="new assignment...." class="p-2"/>
        <button type="submit" class="bg-white b-2 border-l py-2 px-4">Add</button>
        </div>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                newAssignment: ""
            }
        },
        methods:
        {
            emitAdd() {

                this.$emit('add', this.newAssignment);
                this.newAssignment = '';
            }
        }
    }
</script>
