<template>
    <div
    class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2"
    :class="active ? 'inline' : 'hidden'" >

        <file-pond-uploader
            name="file"
            class="border border-dashed border-gray-500 relative h-40"
            ref="pond"
            label-idle="Drop zip file here..."
            @init="filepondInitialized"
            accepted-file-types="application/x-zip-compressed, multipart/x-zip"
            max-file-size="10MB"
        />

    </div>
</template>

<script>

    import vueFilePond, { setOptions } from 'vue-filepond';
    import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
    import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

    import "filepond/dist/filepond.min.css";

    // Added to handle CSRF toke, and also defines the post URL.
    setOptions({
        server: {
            process: {
                url: './upload',
                headers: {
                  'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf_token"]').content
                }
            }
        }
    });

    const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginFileValidateSize);

    export default {
        props: {
            uploaderActive: Boolean
        },
        data() {
            return {
                active: false
            }
        },
        mounted() {
            this.setActive()
        },
        methods: {
            filepondInitialized(){
                console.log('FilePond Object:', this.$refs.pond);
                // console.log(document.head.querySelector('meta[name="csrf_token"]').content);
            },
            setActive()
            {
                //alert(this.uploaderActive);
                this.active = this.uploaderActive.toLowerCase() == 'true' ? true : false;
            }
        },
        components : {
            'file-pond-uploader': FilePond
        },
    }
</script>
