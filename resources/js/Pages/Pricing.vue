<template>
  <guest-layout>
    <template #content>
      <div class="pricings-container">
        <div class="pricings-green-background">
          <div class="pricings-header">
            <span class="pricings-title">Pricings & Plans</span> <br />
            <span class="pricings-subtitle"
              >Try first, decide later. No credit card required!</span
            >
          </div>
        </div>
        <div class="pricings-white-background">
          <div class="pricing-card">
            <div class="pricings-card-header-starter">
              <span class="plan-title">STARTER</span>
            </div>
            <div class="pricings-card-content">
              <span class="plan-price">FREE</span>
              <hr />
              <ul class="plan-benefits">
                <li>Lorem ipsum dolor, sit amet consectetur. </li>
                <li>Veritatis laboriosam natus, exercitationem.</li>
                <li>Voluptatum vero impedit omnis illo harum.</li> 
              </ul>
            </div>
            <div class="pricings-card-footer">
              <button class="btn">Try it for free</button>
            </div>
          </div>
          <div class="pricing-card pricings-best-offer">
            <div class="pricings-card-header-member">
              <span class="plan-title">MEMBER</span>
            </div>
            <div class="pricings-card-content">
              <span class="plan-price">50$</span>
              <hr />
              <ul class="plan-benefits">
                <li>Lorem ipsum dolor, sit amet consectetur. </li>
                <li>Veritatis laboriosam natus, exercitationem.</li>
                <li>Voluptatum vero impedit omnis illo harum.</li>
                <li>Voluptatibus sint enim repudiandae.</li>
                <li>Sapiente, magni alias! Error iusto impedi.</li>
                <li>Impedit sint necessitatibus omnis illo.</li>
              </ul>
            </div>
            <div class="pricings-card-footer">
              <button class="btn">Get Started</button>
            </div>
          </div>
          <div class="pricing-card">
            <div class="pricings-card-header-vip">
              <span class="plan-title">VIP</span>
            </div>
            <div class="pricings-card-content">
              <span class="plan-price">100$</span>
              <hr />
              <ul class="plan-benefits">
                <li>Lorem ipsum dolor, sit amet consectetur. </li>
                <li>Veritatis laboriosam natus, exercitationem.</li>
                <li>Voluptatum vero impedit omnis illo harum.</li>
                <li>Voluptatibus sint enim repudiandae.</li>
                <li>Sapiente, magni alias! Error iusto impedi.</li>
                <li>Impedit sint necessitatibus omnis illo.</li>
              </ul>
            </div>
            <div class="pricings-card-footer">
              <button class="btn">Get Started</button>
            </div>
          </div>
        </div>
      </div>
    </template>
  </guest-layout>
</template>


<script>
import GuestLayout from "../Layouts/GuestLayout";

export default {
  components: {
    GuestLayout,
  },
};
</script>


<style scoped lang="scss">
.pricings-container {
<<<<<<< HEAD
  height: 110vh;
}

.pricings-green-background {
  background-color:#0FC6AA;
=======
  height: 80vh;
}

.pricings-green-background {
  background-color: #0FC6AA;
>>>>>>> 1c84a5e454ea15f2b530a024d11b5d257b26e569
  height: 20%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

.pricings-header {
  padding-top: 3%;
}

.pricings-title {
  font-size: 3em;
  text-align: center;
  width: 100% !important;
  color: white;
  display: inline-block;
}

.pricings-subtitle {
  font-size: 1.3em;
  color: rgb(201, 255, 194);
  text-align: center;
}

.pricings-white-background {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.pricing-card {
  height: 550px;
  width: 350px;
  background-color: rgb(255, 255, 255);
  border-radius: 5px;
  margin: 0 35px;
  transform: translateY(-10%);
  -webkit-box-shadow: 2px 22px 23px -7px rgba(181, 181, 181, 1);
  -moz-box-shadow: 2px 22px 23px -7px rgba(181, 181, 181, 1);
  box-shadow: 2px 22px 23px -7px rgba(181, 181, 181, 1);
}

.pricings-best-offer {
  transform: translateY(10%);
}

.pricings-card-header-starter {
  height: 25;
  background-color: #ffe761;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cpolygon fill='%23AE9' points='120 120 60 120 90 90 120 60 120 0 120 0 60 60 0 0 0 60 30 90 60 120 120 120 '/%3E%3C/svg%3E");
}

.pricings-card-header-member {
  height: 25;
  background-color: #c3ff69;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cpolygon fill='%23AE9' points='120 120 60 120 90 90 120 60 120 0 120 0 60 60 0 0 0 60 30 90 60 120 120 120 '/%3E%3C/svg%3E");
}

.pricings-card-header-vip {
  height: 25;
  background-color: #854cff;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cpolygon fill='%23AE9' points='120 120 60 120 90 90 120 60 120 0 120 0 60 60 0 0 0 60 30 90 60 120 120 120 '/%3E%3C/svg%3E");
}

.plan-title {
  font-size: 4em;
  color: rgb(0, 0, 0);
  text-align: center;
  display: inline-block;
  width: 100%;
  height: 100%;
  font-family: RubikRegular;
  font-weight: 600;
}

.pricings-card-content {
  padding: 1em;
  position: relative;

  hr {
    border-top: 3px dashed rgb(175, 175, 175);
  }
}

.plan-price {
  font-size: 3em;
  color: rgb(0, 0, 0);
  text-align: center;
  display: inline-block;
  width: 100%;
  height: 100%;
}

.plan-benefits {
  list-style-type: none;
  margin: 0;
  padding-left: 0 !important;
  padding-top: 3%;

  li {
    font-size: 1.1em;
    margin-top: 15px;
    font-family: RubikRegular;
    color: rgb(105, 105, 105);
    text-align: center;
  }
}

.pricings-card-footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 15%;
  display: flex;
  justify-content: center;
  align-items: center;

  button {
    background-color: #0FC6AA;
    color: white;
    border: none;
    font-size: 1.3em;
    padding: 0.2em;
  }
}
</style>