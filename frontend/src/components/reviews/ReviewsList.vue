<template>
  <div class="card mb-2">
    <div class="card-header bg-white">
        <h5 class="text-center mt-2">
            Reviews ({{ props.reviews.length }})
        </h5>
    </div>
    <div class="card-body">
        <ul class="mt-4 list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start"
                v-for="review in props.reviews"
                :key="review.id"
                >
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        {{ review.title }}
                    </div>
                    <p>
                        {{ review.body }}
                    </p>
                    <p class="cart-text">
                        <small class="text-body-seconda">
                            by {{ review.user.name }} - <span class="text-danger">{{ review.created_at }}</span>
                        </small>
                    </p>
                    <p>
                        <StarRating 
                            v-model:rating="review.rating"
                            :show-rating="false"
                            read-only
                            :star-size="24"
                        />
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <button class="btn btn-sm btn-danger mb-2"
                        @click="removeReview(review)">
                        <i class="bi bi-trash"></i>
                    </button>
                    <button class="btn btn-sm btn-warning mb-2"
                        @click="editReview(review)">
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>
            </li>
        </ul>
    </div>
  </div>
</template>

<script setup>
    import StarRating from 'vue-star-rating'

    const props = defineProps({
        reviews: {
            type: Array,
            required: true
        }
    })

    const emit = defineEmits(['editReviewEvent', 'removeReviewEvent'])

    const editReview = (review) => {
        emit('editReviewEvent', review)
    }

    const removeReview = (review) => {
        emit('removeReviewEvent', review.id)
    }
</script>

<style>

</style>