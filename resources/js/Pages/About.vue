<template>
  <guest-layout>
    <template #content> 
      <AboutUsSection></AboutUsSection>
    </template>
  </guest-layout>
</template>


<script>

import GuestLayout from "../Layouts/GuestLayout";
import AboutUsSection from '../Components/AboutUsSection.vue';


export default {
  components: {
    GuestLayout,
    AboutUsSection

  },
};
</script>

    AboutUsSection
<style scoped>
</style>