<template>
  <guest-layout>
    <template #content> 
      <HeroSection></HeroSection>
      <HowItWorks></HowItWorks>
    </template>
  </guest-layout>
</template>


<script>
import GuestLayout from "../Layouts/GuestLayout";
import HeroSection from "../Components/HeroSection";
import HowItWorks from "../Components/HowItWorks";

export default {
  components: {
    GuestLayout,
    HeroSection,
    HowItWorks
  },
};
</script>

<style scoped>
</style>