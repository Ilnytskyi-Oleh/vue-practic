<template>

    <tr :class="!this.$parent.isEditing(person.id)?'':'d-none'">
        <th>{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td><a href=""
               @click.prevent="editedPersonId(person.id, person.name, person.age, person.job)"
               class="btn btn-success">Edit</a>
            <a href=""
               @click.prevent="deletePerson(person.id)"
               class="btn btn-danger ml-2">Delete</a>
        </td>
    </tr>

</template>

<script>


export default {
    name: "ShowComponent",
    props:[
        'person'
    ],
    data() {
        return {
            people: null,
            editedPerson: null,
            name: '',
            age: null,
            job: '',
        }
    },
    mounted() {

    },
    methods: {
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                })
        },
        editedPersonId(id, name, age, job) {
            let editName = `edit_${id}`;
            let fullEditName = this.$parent.$refs[editName][0];

            this.$parent.editedPerson = id;
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.job = job;
        },
    }
}
</script>

<style scoped>

</style>
