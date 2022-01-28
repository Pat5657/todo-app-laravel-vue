import VueRouter from 'vue-router'

import TodoListPage from './components/pages/TodoListPage'
import RegisterPage from './components/pages/RegisterPage'
import LoginPage from './components/pages/LoginPage'

export const TODO_PAGE = 'todoPage'
export const REGISTER_PAGE = 'registerPage'
export const LOGIN_PAGE = 'loginPage'

const routes = [
    {
        path: '',
        name: TODO_PAGE,
        component: TodoListPage
    },
    {
        path: '/register',
        name: REGISTER_PAGE,
        component: RegisterPage
    },
    {
        path: '/login',
        name: LOGIN_PAGE,
        component: LoginPage
    },
]

export default new VueRouter({
    mode: 'history',
    routes
})