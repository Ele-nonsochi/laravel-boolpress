<template>
  <!-- <div>
    <h1>Show category</h1>
     <div>
        <div class="card" v-for="post in category.posts" :key="post.id">
            <h5>{{post.title}}</h5>
            <p>{{post.content}}</p>
        </div>
    </div>
  </div> -->
  <div class="col mb-5">
        <div class="card h-100">
            <div class="card-body p-4">
                <div class="text-center">
                 <router-link :to="{name : 'posts.show' , params : { id : post.id }}"> <h5 class="fw-bolder" >{{ post.title }}</h5>
                     </router-link>   
                <h5 class="post-subtitle d-flex align-items-center">
      <router-link v-if="post.category" class="bg-secondary rounded-pill p-1 text-light"
           :to="{ name: 'posts.index', query: { category: post.category.id },}">
          {{ post.category.name }}</router-link>
                </h5>
              <!--   <span class="bg-secondary rounded-pill p-1 text-light">{{ post.category.name }}</span> -->
                <p>{{ post.content }}</p>
                </div>
            </div>
           
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/1">View details</a></div>
            </div>


        </div>
    </div>
</template>

<script>

export default {
    
    data() {
        return {
        categories: [
                
            ]
        };
    },
    methods: {
        fetchPost() {
            const url = "/api/categories/" + this.$route.params.id;
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