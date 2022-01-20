<template>
<div>

  <h1>
      {{msg}}
  </h1>

    <div class="post" v-if="posts.length === 0">
      Nothing to show
    </div>

        <div class="div" v-else>
           <div class="card" v-for="post, i  in posts" :key="i">
               <h5>{{post.title}}</h5>
           </div>

        </div>
</div>
  
</template>

<script>
export default {
    name: "Post",
    props: {
        post: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style></style>