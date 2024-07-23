<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Create",
    components: {Link},

    data() {
        return {
            title: '',
            content: '',
        }
    },

    methods: {
        store() {
            this.$inertia.post('/posts', {title: this.title, content: this.content})
        }

    }
}
</script>

<template>
    <div class="h-screen bg-image">
        <div class="w-2/3 mx-auto pt-8 ">
            <Link :href="route('post.index')"
                  class="border border-s rounded-full border-black p-3 ">Back
            </Link>

            <h1 class="text-3xl text-center">Create</h1>
            <form @submit.prevent="store" class="flex flex-col">
                <input v-model="title" class="my-4 rounded-xl w-auto" type="text" placeholder="title">
                <textarea v-model="content" class="rounded-xl w-auto min-h-20 max-h-96"
                          placeholder="content"></textarea>
                <button class="ml-auto m-4 border border-s border-black p-3 rounded-full " type="submit">Add post</button>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
