<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Your portofolio
      </h2>
    </template>

    <div class="pt-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
          <div
            class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2"
          >
            <div class="p-6">
              <div class="flex items-center">
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  class="w-8 h-8 text-gray-400"
                >
                  <path
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                  ></path>
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                  Upload a new image to your portofolio
                </div>
              </div>

              <div class="ml-12">
                <!-- component -->
                <div class="flex w-full mt-8 bg-grey-lighter">
                  <form @submit.prevent="storePhoto">
                    <label
                      class="
                        w-64
                        flex flex-col
                        items-center
                        px-4
                        py-6
                        bg-white
                        text-blue
                        rounded-lg
                        shadow-lg
                        tracking-wide
                        uppercase
                        border border-blue
                        cursor-pointer
                        hover:bg-green-500
                        hover:text-white
                      "
                    >
                      <svg
                        class="w-8 h-6"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"
                        />
                      </svg>
                      <span class="mt-2 text-sm leading-normal">{{
                        inputText
                      }}</span>
                      <input
                        crossOrigin="anonymous"
                        referrerPolicy="origin"
                        type="file"
                        class="hidden"
                        @change="updatePhotoPreview"
                        accept="image/*"
                        ref="photo"
                      />
                    </label>
                    <Button class="mt-6">Upload</Button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div v-for="image in userImages" v-bind:key="image.id">
        <div>

        <img v-bind:src="'/storage/img/xrays/' + image.xray_image" alt="">
        </div>
        <div>
          Score: 
          <span class="font-bold" v-if="image.xray_result != 0">{{image.xray_result}}%</span>
          <span class="font-bold" v-else>Not available</span>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo";
import AppLayout from "@/Layouts/AppLayout";
import Button from "@/Jetstream/Button";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

export default {
  data() {
    return {
      inputText: "Upload image",
      file: null,
      loaded: 0,
      imageToUrl: null,
      data: null,
      results: null,
      resultType: null,
      userImages: null,
      form: this.$inertia.form(
        {
          _method: "PUT",
          photo: null,
        },
        {
          resetOnSuccess: false,
        }
      ),
      preview: null,
    };
  },
  components: {
    JetApplicationLogo,
    AppLayout,
    Button,
  },

  methods: {
    updatePhotoPreview() {
      const reader = new FileReader();

      reader.onload = (e) => {
        this.preview = e.target.result;
      };

      reader.readAsDataURL(this.$refs.photo.files[0]);
      this.inputText = this.$refs.photo.files[0].name;
      console.log(this.inputText);
    },
    storePhoto() {
      if (this.$refs.photo) {
        this.form.photo = this.$refs.photo.files[0];
      }

      this.form.post(route("xray.store"), {
        preserveScroll: true,
      });

      this.inputText = "Upload image";
    },
    getAllXrays() {
        try {
          axios.get("/getAllXrays").then((response) => {
            this.userImages = response.data;
            console.log(this.userImages);
          });
        } catch (err) {
          console.log(err);
        }
      
    },
  },

  mounted() {
    this.getAllXrays();
  },
};
</script>

