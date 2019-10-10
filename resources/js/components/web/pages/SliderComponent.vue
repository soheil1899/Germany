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


    // import VueGallery from 'vue-gallery';
    import Lightbox from 'vue-my-photos';

    export default {
        name: "SliderComponent",
        data: function () {
            return {
                images: [],
                index: null,
                databaseimages: [],
            };
        },
        methods: {
            showLightbox: function (imageName) {
                this.$refs.lightbox.show(imageName);
            },
        },

        components: {
            'lightbox': Lightbox
        },
        mounted() {
            let that = this;
            axios.get('/getgallery').then(function (response) {
                that.databaseimages = response.data.to_content;

                for (var i = 0 ; i<that.databaseimages.length; i++){
                    var newarr = [];
                    newarr['id'] = i+1;
                    newarr['name'] = that.databaseimages[i]['title'];
                    that.images.push(newarr);
                }
                console.log(that.images);
            });
        }
    }
</script>

<style scoped>
    .slider-image {
        border: 2px solid #f1734b;
        width: 100%;
        height: 100%;
    }

</style>
