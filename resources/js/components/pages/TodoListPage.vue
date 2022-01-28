<template>
    <div class="p-4 mx-auto flex flex-col justify-center max-w-[40rem]">
        <div class="mb-8 p-2 bg-slate-800 rounded shadow">
            <p class="mb-2">Add a task to your todo list</p>
            <form>
                <textarea class="input w-full" rows="4" placeholder="Enter new todo task..."/>

                <button type="submit" class="btn-primary">Submit</button>
            </form>
        </div>

        <div class="flex flex-col gap-4">
            <TodoCard 
                v-for="(todo, i) in todos" :key="i"
                :todo="todo"
            />
        </div>
    </div>
</template>

<script>
import TodoCard from '../parts/TodoCard'

export default {
    name: 'TodoListPage',
    components: {
        TodoCard
    },
    data() {
        return {
            todos: [
                {
                    message: "First message..."
                },
                {
                    message: "Second message..."
                },
                {
                    message: "Third message..."
                },
            ]
        }
    }
}
</script>