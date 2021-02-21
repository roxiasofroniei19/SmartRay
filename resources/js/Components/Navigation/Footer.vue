<template>
<div class="footer-wrapper p-8">
    <div class="footer ">
    <div class="footer-logo">
      <ApplicationMark class="small-logo"></ApplicationMark>
    </div>
    <div class="footer-links">
        <a :href="route('privacy')">Privacy Policy</a>
        <a :href="route('terms')">Terms of Service</a>
    </div>
  </div>
  <div class="footer-copy mt-4 text-gray-400">
      	<span>Copyright &copy; 2021 SmartRay </span>
  </div>
</div>
  
</template>

<script>
import ApplicationMark from "../../Jetstream/ApplicationMark";

export default {
  components: {
    ApplicationMark,
  },
};
</script>

<style scoped lang="scss">
@import "../../../css/_variables.scss";

.footer-wrapper {
  background-color: $primary-color-light;

}

.footer {
  display: flex;
  width: 100%;
}

.small-logo {
  max-width: 30%;
}

.footer-logo {
    width: 50%;
}

.footer-links {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 50%;

    a {
        margin-left: 2em;
        color: $accent-color;
        font-weight: 600;
    }
}

.footer-copy {
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>