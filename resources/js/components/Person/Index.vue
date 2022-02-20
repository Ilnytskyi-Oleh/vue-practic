<template>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="person in people">
            <td>
                <router-link :to="{name:'person.show', params:{id:person.id}}">{{ person.name }}</router-link>
           </td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }} </td>
            <td>
                <router-link class="btn btn-outline-primary" :to="{name:'person.edit', params:{id:person.id}}">Edit</router-link>
                <a @click.prevent="$store.dispatch('deletePerson',person.id)" href="#" class="ml-2 btn btn-outline-danger">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: "Index",
    mounted() {
        this.$store.dispatch('getPeople')
    },
    computed:{
        people(){
            return this.$store.getters.people
        }
    }
}
</script>

<style scoped>

</style>
