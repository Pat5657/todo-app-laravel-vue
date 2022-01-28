<template>
    <div class="p-4">
        <div class="flex flex-col mx-auto w-[38rem] p-8 rounded shadow bg-slate-800">
            <h1 class="text-lg font-bold">Register a new account</h1>

            <form class="flex flex-col gap-2 mt-4">
                <label for="name">Name</label>
                <input name="name" type="text" class="input" v-model="name">

                <label for="email">Email</label>
                <input name="email" type="email" class="input" v-model="email">

                <label for="passowrd">Password</label>
                <input name="password" type="password" class="input" v-model="password">

                <button type="submit" class="btn-primary mt-2" @click.prevent="handleRegister">Register</button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'RegisterPage',
    data() {
        return {
            name: null,
            email: null,
            password: null
        }
    },
    methods: {
        handleRegister: function () {
            axios.post('/api/auth/register', {
                name: this.name,
                email: this.email,
                password: this.password
            }).then(({ data }) => {
                // handle successful registration
                console.log(data)
            })
            .catch(error => {
                // handle failed register attempt
                console.log(error)
            })
        }
    }
}
</script>