<template>
    <div>
        <div v-show="facts.length">
            <input type="text" v-model="newFact">
            <button class="btn btn-primary btn-sm" @click="addFact">Add</button>
        </div>
        <ul v-show="facts.length">
            <li v-for="fact in facts">
                {{ fact }}
            </li>
        </ul>
        <div v-show="!facts.length">Loading...</div>
    </div>
</template>

<script>
    export default {
        mounted() {

            $.get('https://api.chucknorris.io/jokes/random')
                .then(function(response) {
                    console.log(response);
                   this.facts.push(response.data.value);
                });
            // console.log('Component mounted.')
        },
        data() {
            return {
                newFact: '',
                facts: []
            }
        },
        methods: {
            addFact() {
                this.facts.push(this.newFact);
                this.newFact = '';
            }
        }
    }
</script>
