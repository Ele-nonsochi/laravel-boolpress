<template>
           <div class="card h-100">
            <div class="card-body p-4">
                <div class="text-center">
                 <h5 class="fw-bolder" >{{ post.title }}</h5>
                 <span class="bg-secondary rounded-pill p-1 text-light">{{ post.category.name }}</span>
                <p>{{ post.content }}</p>
                </div>
            </div>
            </div>
</template>

<script>

export default {
    
    data() {
        return {
            post:[
                
            ]
        };
    },
    methods: {
        fetchPost() {
            const url = "/api/posts/" + this.$route.params.id;
            window.axios
                .get(url)
                .then((resp) => {
                    this.post = resp.data;
                })
           },
    },
    mounted() {
        this.fetchPost();
    },
};
</script>

<style></style>