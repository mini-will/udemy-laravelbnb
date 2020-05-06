<template>
  <div>
    <bookable-list-item item-title="Cheap Villa1" item-content="A very cheap villa1" :price="1000"></bookable-list-item>
    <bookable-list-item item-title="Cheap Villa2" item-content="A very cheap villa1" :price="1000"></bookable-list-item>
    <bookable-list-item item-title="Cheap Villa3" item-content="A very cheap villa1" :price="1000"></bookable-list-item>
    <bookable-list-item item-title="Cheap Villa4" item-content="A very cheap villa1" :price="1000"></bookable-list-item>
  </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
  components: {
    BookableListItem
  }
};
</script>