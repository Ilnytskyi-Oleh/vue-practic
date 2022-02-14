<template>
<div>
    <CreateComponent></CreateComponent>
    <IndexComponent ref="index"></IndexComponent>

</div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "PersonComponent",
    components: {
        CreateComponent,IndexComponent
    }
}
</script>

<style scoped>

</style>
