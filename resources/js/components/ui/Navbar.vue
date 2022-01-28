<template>
    <div class="flex justify-between p-4 bg-slate-800">
        <div>
            <h1 class="font-bold uppercase text-xl py-1">ToDo app</h1>
        </div>

        <div>
            <router-link class="btn-link" :to="{name: loginPage}">Login</router-link>
            <router-link class="btn-link" :to="{name: registerPageLink}">Register</router-link>
        </div>
    </div>
</template>

<script>
import { REGISTER_PAGE, LOGIN_PAGE } from '../../router'

export default {
    name: 'Navbar',
    data() {
        return {
            registerPageLink: REGISTER_PAGE,
            loginPage: LOGIN_PAGE
        }
    }

}
</script>