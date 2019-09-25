<template>


    <div>

        <div class="row mx-0 my-5 px-5 justify-content-around">
            <div class="col-6 col-lg-3 pb-2" v-for="thumb in images"
                 :key="thumb.id"
                 @click="showLightbox(thumb.name)">
                <img class="slider-image" :src="thumb.name"/>
            </div>
        </div>
        <lightbox id="mylightbox"
                  ref="lightbox"
                  :images="images"
                  :timeoutDuration="5000"
        ></lightbox>
    </div>
</template>

<script>

    var imageList =
        [{
            'name': '/media/test/slider1.jpg',
            'id': '1'
        },
            {
                'name': '/media/test/slider2.jpg',
                'id': '2'
            },
            {
                'name': '/media/test/slider3.jpg',
                'id': '3'
            },
            {
                'name': '/media/test/slider2.jpg',
                'id': '4'
            },
        ];


    // import VueGallery from 'vue-gallery';
    import Lightbox from 'vue-my-photos';

    export default {
        name: "SliderComponent",
        data: function () {
            return {
                images: imageList,
                index: null
            };
        },
        methods: {
            showLightbox: function (imageName) {
                this.$refs.lightbox.show(imageName);
            },
        },

        components: {
            // 'gallery': VueGallery
            'lightbox': Lightbox
        },
    }
</script>

<style scoped>
    .slider-image {
        border: 2px solid #f1734b;
        width: 100%;
        height: 100%;
    }

</style>
