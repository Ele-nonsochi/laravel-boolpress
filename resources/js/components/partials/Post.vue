<template>
    <div class="col mb-5">
        <div class="card h-100">
            <div class="card-body p-4">
                <div class="text-center">
                    
                <h5 class="fw-bolder">{{ post.title }}</h5>
                <span class="bg-secondary rounded-pill p-1 text-light">{{ post.category.name }}</span>
                <p>{{ post.description }}</p>
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
    name: 'Post',
    props: {
        post:{ type: Object }
         
         /* require:true, */
    }
}
</script>

<style>
</style>