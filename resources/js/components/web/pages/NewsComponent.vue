<template>
    <div class="container-fluid mt-5 px-1 px-md-5" id="pre">
        <div class="text-center px-5 pb-5 pt-3">
            <h2 class="border-bottom pb-2 mx-1 mx-md-5"><strong>
                Preise
            </strong></h2>
        </div>

        <div class="row px-1 px-md-5 mx-0 pb-5 ">
            <div class="col-12 col-lg-8 mx-auto" v-html="table.Text">
<!--            <table class="table table-striped table-sm table-warning text-center">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th scope="col">#</th>-->
<!--                    <th scope="col">First</th>-->
<!--                    <th scope="col">Last</th>-->
<!--                    <th scope="col">Handle</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr>-->
<!--                    <th scope="row">1</th>-->
<!--                    <td>Mark</td>-->
<!--                    <td>Otto</td>-->
<!--                    <td>@mdo</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">2</th>-->
<!--                    <td>Jacob</td>-->
<!--                    <td>Thornton</td>-->
<!--                    <td>@fat</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th scope="row">3</th>-->
<!--                    <td>Larry</td>-->
<!--                    <td>the Bird</td>-->
<!--                    <td>@twitter</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NewsComponent",
        data(){
            return{
                table: [],
            }
        },
        mounted() {
            let that = this;
            axios.get('/gettable').then(function (response) {
                that.table = response.data.to_content[0];
                console.log(that.table);
            });
        }
    }
</script>

<style scoped>
    .table{
        box-shadow: 0 0 15px -4px;
    }

</style>
