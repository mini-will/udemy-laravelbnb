<template>
  <div>
    <div v-if="loading">Data is loading...</div>

    <div v-else>
      <div class="row mb-4" v-for="row in rows" :key="'row' + row">
        <div class="col" v-for="(bookable,column) in bookablesInRow(row)" :key="'row'+row+column">
          <bookable-list-item
            :item-title="bookable.title"
            :item-content="bookable.content"
            :price="1000"
          ></bookable-list-item>
        </div>

        <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholders' +row+p"></div>
      </div>
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
  methods: {
    bookablesInRow(row) {
      return this.bookables.slice((row - 1) * this.columns, row * this.columns);
    },
    placeholdersInRow(row) {
      return this.columns - this.bookablesInRow(row).length;
    }
  },
  created() {
    this.loading = true;

    const p = new Promise((resolve, reject) => {
      console.log(resolve);
      console.log(reject);
      setTimeout(() => resolve("Hello"), 3000);
    })
      .then(result => {
        console.log("success ${result}");
      })
      .catch(result => console.log("Error ${result}"));
    console.log(p);

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
        { id: 8, title: "Cheap Villa8", content: "A very cheap villa2" }
      ];
      this.loading = false;
    }, 300);
  }
};
</script>