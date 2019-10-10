<template>
    <div class="container-fluid mt-5 px-1 px-md-5" id="uber">
        <div class="text-center px-5 pb-5 pt-3">
            <h2 class="border-bottom pb-2 mx-1 mx-md-5"><strong>
                Über
            </strong></h2>
        </div>

        <div class="row px-1 px-md-5 mx-0 pb-5 ">
            <div :class="myclass(item.methods)" v-for="item in about['to_content']">
                <div v-if="item.methods == 'Paragraph'" v-html="item.Text">
                </div>
                <img :src="item.title" class="aboutimg" v-if="item.methods == 'Images'">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OurProduct",
        data() {
            return {
                about: [],
            }
        },
        methods:{
            myclass(methods){
                if (methods == 'Paragraph'){
                    return 'col-12 col-lg-8 order-1 order-lg-0';
                }else if(methods == 'Images'){
                    return 'col-12 col-lg-4 order-0 order-lg-1 mb-4';
                }
            }
        },
        mounted() {
            let that = this;
            axios.get('/getabout').then(function (response) {
                that.about = response.data;
                console.log(that.about);
            });
        }
    }
</script>

<style scoped>
    .aboutimg {
        width: 100%;
        border-radius: 50px;
        box-shadow: 0 0 10px 5px #ccc;
    }
</style>
