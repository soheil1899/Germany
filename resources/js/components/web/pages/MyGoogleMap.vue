<template>
    <div class="container-fluid mt-5 px-1 px-md-5" id="anf">
        <div class="text-center px-5 pb-5 pt-3">
            <h2 class="border-bottom pb-2 mx-1 mx-md-5"><strong>
                Anfahrt
            </strong></h2>
        </div>
        <div class="row px-1 px-md-5 mx-0 pb-5 ">
            <div class="col-12 mapstyle p-0">
                <iframe
                    :src="setting['googlemap']"
                    width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
<!--    https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.354340659732!2d10.100394615847556!3d53.587138880030224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDM1JzEzLjciTiAxMMKwMDYnMDkuMyJF!5e0!3m2!1sde!2s!4v1569418038027!5m2!1sde!2s-->

</template>

<script>
    export default {
        name: "MyGoogleMap",
        data(){
            return{
                setting: [],
            }
        },
        mounted() {
            let that = this;
            axios.get('/getsetting').then(function (response) {
               that.setting = response.data;
            });
        }
    }
</script>

<style scoped>
    .mapstyle{
        border: 2px solid #1c294e;
    }

</style>
