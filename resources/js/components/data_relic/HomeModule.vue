<template>

    <div class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2">

        <div class="bar-01-container">
            <img class="10 w-full" src="svg/ui-element.svg?<?php echo rand(0, 2000) ?>" alt="" >
        </div>

        <div class="logo-container">
            <img class="w-full" src="svg/text-logo.svg?<?php echo rand(0, 2000) ?>" alt="" >
        </div>

        <div class="bar-02-container">
            <img class="w-full" src="svg/ui-element.svg?<?php echo rand(0, 2000) ?>" alt="" >
        </div>

        <transition name="buttons">
            <div v-show="show" class="buttons-container flex flex-row gap-1 text-black">
                <button id="upload_csv" class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">UPLOAD CSV</button>
                <button id="modify_data" class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">MODIFY DATA</button>
                <button id="view_data" class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">VIEW DATA</button>
            </div>
        </transition>

    </div>

</template>

<script>
    export default {
        data(){
            return {
                show: false,
            };
        },
        mounted() {
            this.show = true;
        },
    }
</script>
