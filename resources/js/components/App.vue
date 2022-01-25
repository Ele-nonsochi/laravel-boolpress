<template>
  <div class="d-flex flex-column">
    <Navbar> </Navbar>

  <!-- <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div v-for="post in postsList" :key="post.id" class="card mt-4 mb-5">
            <h2>{{ post.title }}</h2>
            <p>{{ post.content }}</p>
          </div>
        </div>
      </div>
    </div> -->
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <Post
            v-for="post in postsList"
            :key="post.id"
            :post="post">
            </Post>
        </div>
      
         <div class="box-link justify-content-center d-flex my-4">

        <button class="page-link" @click="callAxios(currentPage - 1)">
            Previus Page
        </button>

        <button class="page-link">
            {{currentPage}}
        </button>
        
        <button class="page-link" @click="callAxios(currentPage + 1)">
            Next Page
        </button>
    </div>
        

   
    <Footer></Footer>
  </div>
</template>

<script>
import Navbar from "./partials/Navbar.vue";
import Footer from "./partials/Footer.vue";
import Post from "./partials/Post.vue";

export default {
  name: "App",
  components: { Navbar, Footer,Post },
  data() {
    return {
      title: "Vue page",
      postsList: [],
      currentPage: 1,
      lastPage: null,
    };
  },
  methods: {
        getData(page = 1) {
            window.axios.get("/api/posts?page=" + page).then((resp) => {
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

<style lang="scss">
body {
  min-height: 100vh;
}
footer {
  min-height: 50px;
}
</style>