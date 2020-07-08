<template>
  <div v-html="publication"></div>
</template>
<script>
export default {
  name: "paymentpolicy",
  data() {
    return {
      publication: "<div>Loading</div>"
    };
  },
  mounted() {
    this.publication = this.$route.params.publication;
  }
};
</script>
