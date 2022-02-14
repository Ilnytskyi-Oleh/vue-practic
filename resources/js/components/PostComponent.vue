<template>
<div>

    <SinglePostComponent></SinglePostComponent>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in adultPersons" :key="person.id">
                <th scope="row">{{person.id}}</th>
                <td>{{person.name}}</td>
                <td>{{person.age}}</td>
                <td>{{person.job}}</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
    data(){
        return {
            persons:[
                {
                    id:1,
                    name:'Юля',
                    age:33,
                    job:'Дизайнер',
                },
                {
                    id:2,
                    name:'Sveta',
                    age:60,
                    job:'Пенсионер',
                },
                {
                    id:3,
                    name:'Олег',
                    age:32,
                    job:'Типо програмист',
                },
                {
                    id:4,
                    name:'Даша',
                    age:6,
                    job:'Школьница',
                },
            ]
        }

    },
    methods:{
      sayHi(){
          console.log('Hi')
      }
    },
    computed:{
        adultPersons(){
            return this.persons.filter((person)=>person.age >= 18)
        }
    },
    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
