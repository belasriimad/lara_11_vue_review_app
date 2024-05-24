<template>
  <div class="col-md-4 mb-2">
    <div class="card h-100">
        <img :src="product.image" alt="Product Image" 
            class="card-img-top"
            >
        <div class="card-body">
            <div class="card-title">
                {{ product.name }}
            </div>
            <p class="card-text">
                {{ product.desc }}
            </p>
            <p>
                <span class="fw-bold text-danger">
                    $ {{ product.price }}
                </span>
            </p>
            <p v-if="product.reviews.length > 0">
                <StarRating 
                  v-model:rating="reviewAvg"
                  read-only
                  :star-size="24"
                />
            </p>
            <router-link :to="`product/${product.id}`"
                class="btn btn-dark">
                <i class="bi bi-eye"></i> View
            </router-link>
        </div>
    </div>
  </div>
</template>

<script setup>
    import { computed } from 'vue'
    import StarRating from 'vue-star-rating'

    const props = defineProps({
        product: {
            type: Object,
            required: true
        }
    })

    //calculate the average of the ratings
    const reviewAvg = computed(() => parseInt(props.product.reviews.reduce((acc, review) => acc + review.rating / props.product.reviews.length, 0)))
</script>

<style>

</style>