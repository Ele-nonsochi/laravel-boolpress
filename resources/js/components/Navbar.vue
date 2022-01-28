<template>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="/">Laravel Blog</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/">Home</router-link>
          </li>

          <li class="nav-item">
            <a class="nav-link px-lg-3 py-3 py-lg-4" href="login">Login</a>
          </li>
          <li class="nav-item">
              <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/about">About us</router-link>
          </li>
          <li class="nav-item">
              <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/contact">Contact</router-link>
          </li>
          <li class="nav-item">
              <router-link class="nav-link px-lg-3 py-3 py-lg-4" to="/posts">Post</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style lang="scss">
nav a {
  color: rgb(8, 41, 68) !important;
}
</style>