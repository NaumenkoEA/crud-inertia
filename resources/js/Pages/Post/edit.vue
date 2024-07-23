<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Edit",
    components: {Link},

    props: [
        'post'
    ],

    data() {
        return {
            id: this.post.id,
            title: this.post.title,
            content: this.post.content,
        }
    },

    methods: {
        update() {
            this.$inertia.patch(`/posts/${this.id}`, {title: this.title, content: this.content})
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

            <h1 class="text-3xl text-center">Edit</h1>
            <form @submit.prevent="update" class="flex flex-col">
                <input v-model="title" class="my-4 rounded-xl w-auto" type="text" placeholder="title">
                <textarea v-model="content" class="rounded-xl w-auto min-h-20 max-h-96"
                          placeholder="content"></textarea>
                <button class="ml-auto m-4 border border-s border-black p-3 rounded-full " type="submit">Update</button>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
