<template>
    <div class="w-25" v-if="person">
        <div class="mb-3">
            <input type="text" name="name" v-model="person.name" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" name="age" v-model="person.age" class="form-control" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" name="job" v-model="person.job" class="form-control" placeholder="Job">
        </div>
        <div>
            <button :disabled="!isDisabled" @click.prevent="$store.dispatch('updatePerson', {id:person.id,name:person.name, job: person.job, age: person.age })" type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",
    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed:{
        isDisabled(){
            return this.person.name && this.person.age && this.person.job
        },
        person(){
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
