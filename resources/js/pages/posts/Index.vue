<template>

  
    <div class="container">
      <div class="row">
       
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <Post
            v-for="post in postsList"
            :key="post.id"
            :post="post">
            </Post>
        </div>
        

         <div class="box-link justify-content-center d-flex my-4">

        <button class="page-link" @click="getData(currentPage - 1)">
            Previus Page
        </button>

        <button class="page-link">
            {{currentPage}}
        </button>
        
        <button class="page-link" @click="getData(currentPage + 1)">
            Next Page
        </button>
         </div>
      </div>
    </div>
</template>

<script>
import Post from "../../components/Post.vue";

export default {
  name: "App",
  components: { Post },
  data() {
    return {
      title: "Vue page",
      postsList: [],
      categoriesList:[],
      currentPage: 1,
      lastPage: null,
    };
  },
  methods: {
         getData(page = 1) {
            const category = this.$route.query.category;

            window.axios.get("/api/posts", {
          params: {
            page,
            category,
          },
        }).then((resp) => {
                this.postsList = resp.data.data;
                this.currentPage = resp.data.current_page;
                this.lastPage = resp.data.last_page;
            });
        },
    },
  mounted() {
    /* window.axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
    }); */
    this.getData();
  
  },
};
</script>

</script>

<style></style>