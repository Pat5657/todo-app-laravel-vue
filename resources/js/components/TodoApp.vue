<template>
    <div>
        <Navbar></Navbar>
        
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from './ui/Navbar'

    export default {
        name: 'TodoApp',
        components: {
            Navbar
        }
    }
</script>