<template>
  <guest-layout>
    <template #content> 
      <HeroSection></HeroSection>
    </template>
  </guest-layout>
</template>


<script>
import GuestLayout from "../Layouts/GuestLayout";
import HeroSection from "../Components/HeroSection";

export default {
  components: {
    GuestLayout,
    HeroSection
  },
};
</script>

<style scoped>
</style>