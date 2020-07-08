<template>
  <div v-html="layoutdata">
    {{ layoutdata }}
  </div>
</template>
<script>
export default {
  name: "layout",
  data() {
    return {
      layoutdata: "<div>Loading</div>"
    };
  },
  mounted() {
    this.layoutdata = this.$route.params.layout;
  }
};
</script>
