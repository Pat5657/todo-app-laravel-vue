<template>
    <div class="p-4 mx-auto flex flex-col justify-center max-w-[40rem]">
        <TodoForm @created="getTodos"/>

        <div class="flex flex-col gap-4">
            <TodoCard 
                v-for="(todo, i) in todos" :key="i"
                :todo="todo"
            />
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import TodoCard from '../parts/TodoCard'
import TodoForm from '../parts/TodoListPage/TodoForm'

export default {
    name: 'TodoListPage',
    components: {
        TodoCard,
        TodoForm
    },
    data() {
        return {
            todos: []
        }
    },
    methods: {
        getTodos: function () {
            axios.get('/api/todo')
            .then(({ data }) => this.todos = data)
            .catch((error) => console.log(error))
        }
    },
    created() {
        this.getTodos()
    }
}
</script>