<template>
    <div>
        <button class="btn btn-link p-0 m-0" @click="showAlert()">Delete</button>
        <!--<img src="{{ asset('images/icons/bx-trash.svg') }}"/>-->
    </div>
</template>

<script>
    export default {
        props: [
            'postId'
        ],
        mounted() {
            // console.log('Component mounted.')
        },
        data() {
            return {
                foo: 'bar'
            }
        },
        methods: {
            showAlert() {
                if (confirm('ar tikrai norite trinti?' + this.postId)) {
                    axios.delete('/posts/' + this.postId)
                        .then(function(response) {
                            window.location = '/posts';
                        })
                        .catch(function(error) {
                            console.error(error);
                            alert(error);
                        })
                }
            }
        }
    }
</script>
