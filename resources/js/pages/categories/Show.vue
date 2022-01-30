<template>
     <div class="container">
      <div class="row">
       
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <Post
            v-for="post in category.posts"
            :key="post.id"
            :post="post">
            </Post>
        </div>
     </div>
</template>

<script>
import Post from "../../components/Post.vue";

export default {
components: { Post },
data() {
     return {
      category: [
          
      ]
    };
  },
    methods: {
        fetchPost() {
            const url = "/api/categories/" + this.$route.params.category;
            window.axios
                .get(url)
                .then((resp) => {
                    this.category = resp.data;
                })
           },
    },
    mounted() {
        this.fetchPost();
    },
};
</script>

<style></style>