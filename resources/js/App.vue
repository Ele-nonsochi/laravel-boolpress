<template>
  <div class="d-flex flex-column">
    <Navbar> </Navbar>

       <!--  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
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
    </div> -->

    <router-view></router-view>
        

   
    <Footer></Footer>
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";


export default {
  name: "App",
  components: { Navbar, Footer },
  data() {
    return {
      title: "Vue page",
      
    };
  },
  /* methods: {
        getData(page = 1) {
            window.axios.get("/api/posts?page=" + page).then((resp) => {
                this.postsList = resp.data.data;
                this.currentPage = resp.data.current_page;
                this.lastPage = resp.data.last_page;
            });
        },
    },
  mounted() {
     window.axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
    });
    this.getData();
  }, */
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