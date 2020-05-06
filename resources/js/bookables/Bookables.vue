<template>
  <div>
    <div v-if="loading">Data is loading...</div>

    <div v-els>
      <bookable-list-item
        :item-title="bookable.title"
        :item-content="bookable.content"
        :price="1000"
        v-for="(bookable,index) in bookables"
        :key="index"
      ></bookable-list-item>
    </div>
  </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
  components: {
    BookableListItem
  },
  data() {
    return {
      bookables: null,
      loading: null
    };
  },
  created() {
    this.loading = true;

    setTimeout(() => {
      this.bookables = [
        {
          id: 1,
          title: "Cheap Villa1",
          content: "A very cheap villa1"
        },
        { id: 2, title: "Cheap Villa2", content: "A very cheap villa2" }
      ];
      this.loading = false;
    }, 1000);
  }
};
</script>