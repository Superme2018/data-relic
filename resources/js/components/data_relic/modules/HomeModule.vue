<template>

    <div
        class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2"
        :class="active ? 'inline' : 'hidden'">

        <transition name="bar">
            <div v-show="showBar" style="transition-delay: 0.2s" class="bar-01-container">
                <img class="10 w-full" :src="'svg/ui-element.svg?' + randNumber">
            </div>
        </transition>

        <transition name="logo">
            <div v-show="showLogo" class="logo-container">
                <img class="w-full color-animation" :src="'svg/text-logo.svg?' + randNumber" alt="data relic logo" >
            </div>
        </transition>

        <transition name="bar">
            <div v-show="showBar" style="transition-delay: 0.2s" class="bar-02-container">
                <img class="w-full" :src="'svg/ui-element.svg?' + randNumber" >
            </div>
        </transition>

        <transition name="buttons">
            <div v-show="showButtons"
                @transitionend="transitionEnded"
                style="transition-delay: 1.5s"
                class="buttons-container flex flex-row gap-1 text-black">
                <button :class="colorMad ? 'color-mad' : ''" id="upload_csv" class="font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">UPLOAD CSV</button>
                <button :class="colorMad ? 'color-mad' : ''" id="modify_data" class="font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">MODIFY DATA</button>
                <button :class="colorMad ? 'color-mad' : ''" id="view_data" class="font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">VIEW DATA</button>
            </div>
        </transition>

    </div>

</template>

<script>

    export default {
        props: {
            homeActive: Boolean,
            randNumber: String,
        },
        data(){
            return {
                showButtons: false,
                showBar: false,
                showLogo: false,
                colorMad: false,
                active: false
            };
        },
        mounted() {
            this.showBar = true;
            this.showLogo = true;
            this.showButtons = true;
            this.setActive();
        },
        methods: {
            mountedFunction()
            {
              console.log(this.randNumber);
            },
            transitionEnded()
            {
                this.colorMad = true;
            },
            setActive()
            {
                //alert(this.homeActive);
                this.active = this.homeActive.toLowerCase() == 'true' ? true : false;
            }
        }
    }

</script>
