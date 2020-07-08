<template>
  <div v-html="plagiarism"></div>
</template>
<script>
export default {
  name: "plagiarismpolicy",
  data() {
    return {
      plagiarism: "<div>Loading</div>"
    };
  },
  mounted() {
    this.plagiarism = this.$route.params.plagiarism;
  }
};
</script>
