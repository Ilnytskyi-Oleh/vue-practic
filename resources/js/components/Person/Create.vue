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
            <button :disabled="!isDisabled" @click.prevent="$store.dispatch('storePerson', {name: this.name, age: this.age, job: this.job})" type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</template>

<script>

export default {
    name: "Create",
    data(){
        return {
            name:'',
            age:null,
            job:''
        }
    },
    computed:{
        isDisabled(){
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
