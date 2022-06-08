<template>
    <div class="grid grid-cols-1 justify-center justify-items-center items-center h-screen">

        <data-relic-module-home :home-active="homeActive" :rand-number="randNumber"></data-relic-module-home>
        <data-relic-module-image-uploader :uploader-active="uploaderActive"></data-relic-module-image-uploader>

    </div>
</template>

<script>

 export default {
    props: {
       randNumber: String,
       homeActive: Boolean,
       uploaderActive: Boolean
    }
}

</script>
