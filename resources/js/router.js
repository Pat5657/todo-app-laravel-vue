import VueRouter from 'vue-router'

import TodoListPage from './components/pages/TodoListPage'

const TODO_PAGE = 'todoPage'

const routes = [
    {
        path: '',
        name: TODO_PAGE,
        component: TodoListPage
    }
]

export default new VueRouter({
    mode: 'history',
    routes
})