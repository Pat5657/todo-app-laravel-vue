<template>
    <div class="bg-slate-800 rounded shadow w-full p-4">
        <p>{{ todo.message }}</p>
    </div>
</template>

<script>
export default {
    name: 'TodoCard',
    props: {
        todo: Object
    }
}
</script>