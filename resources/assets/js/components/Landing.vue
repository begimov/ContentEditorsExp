<template>
    <div class="container">
        <form method="POST" @submit.prevent="submitData">
            <template v-for="block in landing.blocks">
                <p v-for="(element, id) in block.elements" :name="block.template + '_' + id" data-editable>{{ element }}</p>
            </template>
            <button type="submit">SAVE</button>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                landing: [],
                formData: []
            }
        },
        computed: {
            //
        },
        props: ['data'],
        methods: {
            submitData() {
              console.log(this.in);
            }
        },
        mounted() {
            this.landing = JSON.parse(this.data)
        }
    }
</script>
