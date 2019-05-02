<script>
    export default {
        mounted() {

            // $.get('https://api.chucknorris.io/jokes/random')
            //     .then(function(response) {
            //        this.newFact = response.value;
            //     });
            // console.log('Component mounted.')
        },
        data() {
            return {
                newFact: '',
                facts: [],

                showMessage: false,
                message: '',
                messageClass: ''
            }
        },
        methods: {
            addFact() {
                if (this.newFact.length > 0) {
                    this.showSuccessMessage();
                    this.facts.push(this.newFact);
                    this.newFact = '';
                } else {
                    this.showErrorMessage();
                }
                setTimeout(() => { this.hideMessage() }, 2000);
            },
            showSuccessMessage() {
                this.showMessage = true;
                this.message = 'Irasas sekmingai idetas';
                this.messageClass = 'alert-success';
            },
            showErrorMessage() {
                this.showMessage = true;
                this.message = 'ERROR: nepavyka idet';
                this.messageClass = 'alert-danger';
            },
            hideMessage() {
                this.message = '';
                this.showMessage = false;
                this.messageClass = '';
            }
        }
    }
</script>
