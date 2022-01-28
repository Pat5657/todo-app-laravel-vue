<template>
    <div class="mb-8 p-2 bg-slate-800 rounded shadow">
        <p class="mb-2">Add a task to your todo list</p>
        <form>
            <textarea 
                class="input w-full" 
                rows="4" 
                placeholder="Enter new todo task..."  
                v-model="message"
            />

            <button type="submit" class="btn-primary" @click.prevent="handleSubmit">Submit</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'TodoForm',
    data() {
        return {
            message: null
        }
    },
    methods: {
        handleSubmit: function () {
            axios.post('/api/todo', {message: this.message})
                .then(({ data }) => {
                    // handle successful creation of new todo item
                    console.log('success', data)
                    this.message = null
                    this.$emit('created')
                })
                .catch((error) => {
                    // handle error
                    console.log(error)
                })
        }
    }
}
</script>