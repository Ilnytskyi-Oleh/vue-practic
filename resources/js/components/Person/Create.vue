<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" name="name" v-model="name" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" name="age" v-model="age" class="form-control" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" name="job" v-model="job" class="form-control" placeholder="Job">
        </div>
        <div>
            <button @click.prevent="store" type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Create",
    data(){
        return {
            name:'',
            age:null,
            job:''
        }
    },
    methods:{
        store(){
            axios.post('/api/people',{name:this.name,age:this.age,job:this.job})
            .then(res=>{
                router.push({name:'person.index'})
            })
        }
    }
}
</script>

<style scoped>

</style>
