<template>
  <div>
    <bookable-list-item
      :item-title="bookable1.title"
      :item-content="bookable1.content"
      :price="1000"
    ></bookable-list-item>
    <bookable-list-item
      :item-title="bookable2.title"
      :item-content="bookable2.content"
      :price="2000"
    ></bookable-list-item>
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
      bookable1: { title: "Cheap Villa1", content: "A very cheap villa1" },
      bookable2: { title: "Cheap Villa2", content: "A very cheap villa2" }
    };
  },
  created() {
    console.log("created");
    console.log(this.bookable1);
    console.log(this.bookable2);

    setTimeout(() => {
      this.bookable1.title = "Expensive Villa";
      this.bookable2.title = "Very Expensive Villa";
    }, 3000);
  }
};
</script>