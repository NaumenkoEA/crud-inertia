<template>
    <div class="h-screen bg-image">
        <div class="w-2/3 mx-auto pt-8">

            <div class="flex flex-row justify-between mb-3">
                <Link :href="route('/')"
                      class="border border-s rounded-full border-black p-3 ">Back
                </Link>
                <h1 class="text-3xl p-3 text-white">Posts</h1>
                <div class="p-3 flex">
                    <Link :href="route('post.create')"
                          class="cursor-pointer w-24 border border-s border-black rounded-full pl-3.5 py-2 h-full  ">
                        Add Post
                    </Link>
                </div>
            </div>

            <div v-if="posts">
                <div v-for="post in posts" :key="post.id"
                     class="border-black border rounded-3xl mb-5 flex flex-col bg-white">

                    <p class="pl-5 py-3 text-xl text-gray-900">Заголовок: {{ post.title }}</p>
                    <p class="pl-5 py-3 text-xl text-gray-900">Описание: {{ post.content }}</p>

                    <div class="">
                        <Link :href="route('post.edit',post.id)"
                              class=" cursor-pointer w-16 border border-s border-black rounded-full pl-1.5 py-2 h-full ">
                            Edit
                        </Link>
                    </div>

                    <div class="">
                        <Link @click="deletePost(post.id)"
                              class=" cursor-pointer w-16 border border-s border-black rounded-full pl-1.5 py-2 h-full ">
                            Delete
                        </Link>
                    </div>



                </div>

            </div>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "Index",
    props: ['posts'],
    components: {Link},

    methods: {
        deletePost(id) {
            this.$inertia.delete(`/posts/${id}`)
        }
    }

}
</script>

<style scoped>
/* Ваши стили */
</style>
