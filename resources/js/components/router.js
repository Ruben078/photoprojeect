import Home from './pages/Home';
import Register from "./pages/Register";
import Login from "./pages/Login";
import Tasks from "./pages/Tasks";
import AddTask from './pages/AddTask';
import Blog from "./pages/Blog";
export default [
    {
        path: '/my',
        component: Home,
        name: 'home',
        beforeEnter: (to, from, next) => {
            // ...
        }
    },
    {
        path: '/register',
        component: Register,
        name: 'register'
    },
    {
        path: '/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/tasks',
        component: Tasks,
        name: 'tasks'
    },
    {
        path: '/addtask',
        component: AddTask,
        name: 'addtask'
    },
    {
        path: '/blog',
        component: Blog,
        name: 'blog'
    }
]
