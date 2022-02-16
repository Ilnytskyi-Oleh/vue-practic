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
            <button @click.prevent="update" type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Edit",
    data(){
        return {
            name:'',
            age:null,
            job:''
        }
    },
    mounted() {
        this.getPerson()
    },
    methods:{
        getPerson(){
            axios.get(`/api/people/${this.$route.params.id}/edit`)
            .then(res => {
                this.name = res.data.name
                this.age = res.data.age
                this.job = res.data.job
            })
        },

        update(){
            axios.patch(`/api/people/${this.$route.params.id}`, {name:this.name,age:this.age,job:this.job})
            .then(res=>{
                router.push({name: 'person.show'})
            })
        }
    }
}
</script>

<style scoped>

</style>
