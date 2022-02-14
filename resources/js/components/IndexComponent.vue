<template>
    <div class="">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                <template v-for="person in people">
                    <ShowComponent :ref="`show_${person.id}`" :person="person"></ShowComponent>
                    <EditComponent :ref="`edit_${person.id}`" :person="person"></EditComponent>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";
export default {
    name: "IndexComponent",
    components: {EditComponent, ShowComponent},

    data(){
        return {
            people:null,
            editedPerson:null,
            name:'',
            age:null,
            job:'',
        }
    },
    mounted() {
        this.getPeople()
    },
    methods:{
        getPeople(){
            axios.get('/api/people')
                .then(res =>{
                    this.people = res.data
                })
        },
        isEditing(id){
            return this.editedPerson === id;
        }
    }
}
</script>

<style scoped>

</style>
