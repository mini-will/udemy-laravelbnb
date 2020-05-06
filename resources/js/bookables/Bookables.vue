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
      loading: null,
      columns: 3
    };
  },
  computed: {
    rows() {
      return this.bookables === null
        ? 0
        : Math.ceil(this.bookables.length / this.columns);
    }
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
        { id: 2, title: "Cheap Villa2", content: "A very cheap villa2" },
        { id: 3, title: "Cheap Villa3", content: "A very cheap villa2" },
        { id: 4, title: "Cheap Villa4", content: "A very cheap villa2" },
        { id: 5, title: "Cheap Villa5", content: "A very cheap villa2" },
        { id: 6, title: "Cheap Villa6", content: "A very cheap villa2" },
        { id: 7, title: "Cheap Villa7", content: "A very cheap villa2" },
        { id: 8, title: "Cheap Villa8", content: "A very cheap villa2" },
        { id: 9, title: "Cheap Villa9", content: "A very cheap villa2" }
      ];
      this.loading = false;
    }, 1000);
  }
};
</script>