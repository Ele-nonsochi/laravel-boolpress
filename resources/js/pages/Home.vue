<template>
    <div class="container">
      <div class="row">
        <div class="col-9">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <Post
            v-for="post in postsList"
            :key="post.id"
            :post="post">
            </Post>
        </div>
        </div>
        <!-- Side Bar -->
        <div class="col-3">
           <h4>Categorie disponibili</h4>
          <ul>
            <li v-for="category of categoriesList" :key="category.id">
              <router-link to="/">{{category.name}}</router-link>
            </li>
          </ul>
        </div>

        <!-- BUTTON PAGE -->
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
import Post from "../components/Post.vue";

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
            window.axios.get("/api/posts?page=" + page).then((resp) => {
                this.postsList = resp.data.data;
                this.currentPage = resp.data.current_page;
                this.lastPage = resp.data.last_page;
            });
        },
        getCategories(){
           window.axios.get("/api/categories").then((resp) => {
                this.categoriesList = resp.data.data;
        });
      },
    },
  mounted() {
    /* window.axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
    }); */
    this.getData();
    this.getCaterogies();
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