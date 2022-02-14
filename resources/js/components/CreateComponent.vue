<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" class="form-control" id="name" placeholder="Name ...">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" class="form-control" id="age" placeholder="Age ...">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" class="form-control" id="job" placeholder="Job ...">
        </div>
        <div class="mb-3">
            <button v-on:click="createPerson">Создать</button>
        </div>
    </div>

</template>

<script>
import IndexComponent from "./IndexComponent";
export default {
    name: "CreateComponent",
    components: {
        IndexComponent
    },

    data(){
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    mounted(){

    },
    methods:{
        createPerson(){
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then(res =>{
                    this.$parent.$refs.index.getPeople();
                })
                .finally(()=>{
                this.job =null
                this.age = null
                this.name = null
            })
        }
    },

}
</script>

<style scoped>

</style>
