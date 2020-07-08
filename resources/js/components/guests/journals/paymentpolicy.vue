<template>
  <div v-html="paymentpolicy"></div>
</template>
<script>
export default {
  name: "paymentpolicy",
  data() {
    return {
      paymentpolicy: "<div>Loading</div>"
    };
  },
  mounted() {
    this.paymentpolicy = this.$route.params.paymentpolicy;
  }
};
</script>
