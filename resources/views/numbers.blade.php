@extends('layouts.blog')

@section('content')
    <h2>Numbers</h2>

    <numbers-component inline-template>
        <div>
            <div>
                <input type="text" v-model="newFact">
                <button class="btn btn-primary btn-sm" @click="addFact">Add</button>

                <div class="alert" v-show="showMessage" :class="messageClass">@{{ message }}</div>
            </div>
            {{--<ul v-show="facts.length">--}}
            <ul>
                <li v-for="fact in facts">
                    @{{ fact }}
                </li>
            </ul>
            {{--<div>@{{ newFact }}</div>--}}
            {{--<div v-show="!facts.length">Loading...</div>--}}
        </div>
    </numbers-component>
@endsection