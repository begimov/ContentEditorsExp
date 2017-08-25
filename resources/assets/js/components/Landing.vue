<script>
    export default {
        data() {
            return {
                landing: [],
                message: 'message',
                newblock: ''
            }
        },
        computed: {
            //
        },
        props: ['data'],
        methods: {
            clicked() {
                this.newblock = '<h1>dsfsdfsd</h1>'
            }
        },
        mounted() {
            this.landing = JSON.parse(this.data)
            console.log(this.landing)
        }
    }
</script>
