<template>
  <div v-html="misconductdata"></div>
</template>
<script>
export default {
  name: "academic_misconduct",
  data() {
    return {
      misconductdata: "<div>Loading</div>"
    };
  },
  mounted() {
    this.misconductdata = this.$route.params.misconduct;
  }
};
</script>
