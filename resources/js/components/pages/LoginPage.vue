<template>
    <div class="p-4">
        <div class="flex flex-col mx-auto w-[38rem] p-8 rounded shadow bg-slate-800">
            <h1 class="text-lg font-bold">Login to an existing account</h1>

            <form class="flex flex-col gap-2 mt-4">
                <label for="email">Email</label>
                <input name="email" type="email" class="input" v-model="email">

                <label for="passowrd">Password</label>
                <input name="password" type="password" class="input" v-model="password">

                <button type="submit" class="btn-primary mt-2" @click.prevent="handleLogin">Login</button>
            </form>

            <p class="text-center text-red-500 mt-2">{{ error }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { TODO_PAGE } from '../../router'

export default {
    name: 'LoginPage',
    data() {
        return {
            email: null,
            password: null,
            error: null
        }
    },
    methods: {
        handleLogin: function () {
            this.error = null

            axios.post('/api/auth/login', {
                email: this.email,
                password: this.password
            }).then(({ data }) => {
                // handle successful login attempt 
                console.log(data)
                // TODO: store token 
                this.$router.push({name: TODO_PAGE})
            })
            .catch((error) => {
                // handle failed login
                console.log(error)
                this.error = error.response.data.error
            })
        }
    }
}
</script>