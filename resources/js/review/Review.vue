<template>
  <div>
    <div v-if="loading">Loading...</div>
    <div v-else>
      <div v-if="alreadyReviewd">
        <h3>You've already left a review for this booking!</h3>
      </div>

      <div v-else>
        <div class="form-group">
          <label class="text-muted">Select the star rating (1 is worst - 5 is best)</label>
          <star-rating class="fa-3x" v-model="review.rating"></star-rating>
        </div>

        <div class="form-group">
          <label for="content" class="text-muted">Describe your expririence with</label>
          <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-lg btn-primary btn-block">submit</button>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      review: {
        rating: 5,
        content: null
      },
      existingReview: null,
      loading: false
    };
  },
  created() {
    this.loading = true;

    // 1. If review already exists (in reviews table by id)
    axios
      .get(`/api/reviews/${this.$route.params.id}`)
      .then(response => (this.existingReview = response.data.data))
      .catch(err => {})
      .then(() => (this.loading = false));

    // 2. Fetch a booking by a review key
    // 3. Store the review
  },
  computed: {
    alreadyReviewd() {
      return this.existingReview !== null;
    }
  }
};
</script>