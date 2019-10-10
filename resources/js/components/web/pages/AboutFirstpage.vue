<template>
    <div class="container-fluid mt-5 px-1 px-md-5" id="kon">
        <div class="text-center px-5 pb-5 pt-3">
            <h2 class="border-bottom pb-2 mx-1 mx-md-5"><strong>
                Kontakt / Öffnungszeiten
            </strong></h2>
        </div>

        <div class="row px-1 px-md-5 mx-0 pb-5 justify-content-center">

            <div class="col-12 col-lg-3 mb-4 text-center">
                <i class="fas fa-mobile-alt fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['otherphone']}}
                </strong></label>
            </div>
            <div class="col-12 col-lg-4 mb-4 text-center">
                <i class="fas fa-user-tie fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['telegram']}}
                </strong></label>
            </div>
            <div class="col-12 col-lg-3 mb-4 text-center">
                <i class="fas fa-phone-square fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['phone']}}
                </strong></label>
            </div>
            <div class="col-12 col-lg-3 mb-4 text-center">
                <i class="fas fa-coins fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['supportphone']}}
                </strong></label>
            </div>
            <div class="col-12 col-lg-6 mb-4 text-center">
                <i class="fas fa-map-marker fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['address']}}
                </strong></label>
            </div>
            <div class="col-12 col-lg-3 mb-4 text-center">
                <i class="fas fa-clock fa-3x d-block mb-3"></i>
                <label><strong>
                    {{setting['fax']}}
                </strong></label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AboutFirstpage",
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


</style>
