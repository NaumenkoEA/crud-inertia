<template>
    <div class="auth-container">
        <div class="toggle-buttons">
            <button @click="showLogin = true" :class="{ active: showLogin }">Log In</button>
            <button @click="showLogin = false" :class="{ active: !showLogin }">Register</button>
        </div>

        <div v-if="showLogin">
            <Login @authenticated="handleAuthenticated" />
        </div>

        <div v-else>
            <Register @authenticated="handleAuthenticated" />
        </div>
    </div>
</template>

<script>
import Login from '../Pages/Auth/Login.vue';
import Register from '../Pages/Auth/Register.vue';

export default {
    components: {
        Login,
        Register
    },
    data() {
        return {
            showLogin: true
        }
    },
    methods: {
        handleAuthenticated() {
            this.$inertia.visit('/');
        }
    }
}
</script>

<style scoped>


.toggle-buttons {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.toggle-buttons button {
    padding: 10px 20px;
    cursor: pointer;
    border: none;
    background-color: #f0f0f0;
    border-radius: 5px;
}

.toggle-buttons button.active {
    background-color: #ddd;
}
</style>
