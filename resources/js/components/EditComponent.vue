<template>
    <tr :class="this.$parent.isEditing(person.id)?'':'d-none'">
        <th>{{ person.id }}</th>
        <td><input type="text" v-model="name"></td>
        <td><input type="text" v-model="age"></td>
        <td><input type="text" v-model="job"></td>
        <td>
            <a href=""
               @click.prevent="updatePerson(person.id)"
               class="btn btn-success">Update</a>
        </td>
    </tr>
</template>

<script>

export default {
    name: "EditComponent",
    props:[
        'person'
    ],
    data(){
        return {
            name:'',
            age:null,
            job:'',
        }
    },
    mounted() {

    },
    methods:{
        updatePerson(id){
            this.$parent.editedPerson = null
            axios.patch(`/api/people/${id}`,{name:this.name, age:this.age, job:this.job})
                .then(res =>{
                    this.$parent.getPeople()
                })
        },
    }
}
</script>

<style scoped>

</style>
