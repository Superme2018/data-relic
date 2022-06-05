<template>
    <div class="mt-4">

        <file-pond-uploader
            name="file"
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
        components : {
            'file-pond-uploader': FilePond
        },
        data() {
            return {
            }
        },
        methods: {
            filepondInitialized(){
                console.log('FilePond Object:', this.$refs.pond);
                // console.log(document.head.querySelector('meta[name="csrf_token"]').content);
            }
        }
    }
</script>
