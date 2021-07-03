<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Upload a new image
      </h2>
    </template>

    <div class="py-12" v-if="loaded == 0">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                  X-Ray image check
                </div>
              </div>

              <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                  <b>Description:</b> Upload an X-Ray image to check for
                  possible cancer types OR select one from your portofolio.
                  Currently supported cancer types: Lung and Brain
                </div>
                <!-- component -->
                <div class="flex w-full mt-8 bg-grey-lighter">
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
                      @change="previewFiles"
                      accept="image/*"
                    />
                  </label>
                </div>

                <Button class="mt-6" @click="sendButtonPushed()"
                  >Send X-Ray</Button
                >
              </div>
            </div>
            <div
              class="
                py-4
                w-full
                bg-blue-100
                overflow-y-auto overflow-x-hidden
                max-h-96
              "
            >
              <div
                class="
                  w-full
                  ml-4
                  text-lg text-gray-600
                  leading-7
                  font-semibold
                "
              >
                Portofolio
              </div>
              <div v-if="userImages != null">
                <div
                  class="
                    grid grid-cols-1
                    md:grid-cols-2
                    lg:grid-cols-3
                    gap-3
                    max-w-7xl
                    mx-auto
                    sm:px-6
                    lg:px-8
                    mt-2
                  "
                >
                  <div
                    v-for="image in userImages"
                    v-bind:key="image.id"
                    class="cursor-pointer"
                  >
                    <div>
                      <img
                        @click="selectImage(image.id)"
                        v-bind:src="'/storage/img/xrays/' + image.xray_image"
                        alt=""
                      />
                    </div>
                    <div
                      v-if="image.id == selectedPicture"
                      class="bg-green-400 p-2"
                    >
                      Score:
                      <span class="font-bold" v-if="image.xray_result != 0"
                        >{{ image.xray_result }}%</span
                      >
                      <span class="font-bold" v-else>Not available</span>
                    </div>
                    <div v-else>
                      Score:
                      <span class="font-bold" v-if="image.xray_result != 0"
                        >{{ image.xray_result }}%</span
                      >
                      <span class="font-bold" v-else>Not available</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-4 text-gray-600" v-else>
                Your portofolio is empty.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-12" v-if="loaded == 1">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        style="
          margin: auto;
          background: rgb(241, 242, 243);
          display: block;
          shape-rendering: auto;
        "
        width="200px"
        height="200px"
        viewBox="0 0 100 100"
        preserveAspectRatio="xMidYMid"
      >
        <circle
          cx="50"
          cy="50"
          r="0"
          fill="none"
          stroke="#b3c430"
          stroke-width="2"
        >
          <animate
            attributeName="r"
            repeatCount="indefinite"
            dur="1s"
            values="0;40"
            keyTimes="0;1"
            keySplines="0 0.2 0.8 1"
            calcMode="spline"
            begin="0s"
          ></animate>
          <animate
            attributeName="opacity"
            repeatCount="indefinite"
            dur="1s"
            values="1;0"
            keyTimes="0;1"
            keySplines="0.2 0 0.8 1"
            calcMode="spline"
            begin="0s"
          ></animate>
        </circle>
        <circle
          cx="50"
          cy="50"
          r="0"
          fill="none"
          stroke="#4c5630"
          stroke-width="2"
        >
          <animate
            attributeName="r"
            repeatCount="indefinite"
            dur="1s"
            values="0;40"
            keyTimes="0;1"
            keySplines="0 0.2 0.8 1"
            calcMode="spline"
            begin="-0.5s"
          ></animate>
          <animate
            attributeName="opacity"
            repeatCount="indefinite"
            dur="1s"
            values="1;0"
            keyTimes="0;1"
            keySplines="0.2 0 0.8 1"
            calcMode="spline"
            begin="-0.5s"
          ></animate>
        </circle>
      </svg>
    </div>

    <div class="py-12" v-if="loaded == 2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
          <h1
            class="block w-full text-center text-3xl font-bold text-green-400"
          >
            {{ results }}%
          </h1>
          <h3 class="block w-full text-center text-lg font-bold text-green-300">
            {{ resultText }}
          </h3>
          <div class="bg-yellow-100 p-4 mt-6">
            <div
              class="
                mx-auto
                flex-shrink-0 flex
                items-center
                justify-center
                h-12
                w-12
                rounded-full
                bg-red-100
                sm:mx-0
                sm:h-10
                sm:w-10
              "
            >
              <svg
                class="h-6 w-6 text-red-600"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                />
              </svg>
            </div>
            The percentage calculated should only be taken as a reference and
            not as a fact. Please talk to a specialised doctor for more details
            if you have any concerns.
          </div>

          <div class="flex justify-center mt-4">
            <a href="/portofolio"
              ><Button class="m-2">Go to portofolio</Button></a
            >
            <a href="/xray"><Button class="m-2">Upload a new image</Button></a>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo";
import AppLayout from "@/Layouts/AppLayout";
import Button from "@/Jetstream/Button";

export default {
  components: {
    JetApplicationLogo,
    AppLayout,
    Button,
  },
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
      selectedPicture: null,
      resultText: null,
    };
  },
  methods: {
    selectImage(id) {
      this.selectedPicture = id;
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
    previewFiles(event) {
      this.inputText = event.target.files[0].name;
      this.file = event.target.files[0];
    },
    sendButtonPushed() {
      this.loaded = 1;

      if (this.selectedPicture != null) {
        try {
          axios.get("/getImage/" + this.selectedPicture).then((response) => {
            this.imageToUrl = response.data;
            this.imageToUrl = "data:image/jpeg;base64," + this.imageToUrl;
          });
        } catch (err) {
          console.log(err);
        }
      } else {
        this.toDataUrl();
      }

      setTimeout(() => {
        this.sendImageToAzure();
      }, 400);
    },
    toDataUrl() {
      const reader = new FileReader();

      reader.onload = (e) => {
        this.imageToUrl = e.target.result;
      };

      reader.readAsDataURL(this.file);
    },
    sendImageToAzure() {
      if (this.imageToUrl != null) {
        const payload = {
          Inputs: {
            WebServiceInput0: [
              {
                image: this.imageToUrl,
                id: 0,
                category: "",
              },
            ],
          },
          GlobalParameters: {},
        };
        console.log(payload);
        try {
          axios
            .post(
              "http://20.93.180.35:80/api/v1/service/endpoint-cancer/score",
              payload,
              {
                headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer VYJhXE6QmiEVwIzsMndELdN143G4ISIy",
                },
              }
            )
            .then((response) => {
              setTimeout(() => {
                this.loaded = 2;
                this.resultType =
                  response.data.Results.WebServiceOutput0[0]["Scored Labels"];
                console.log(response);
                switch (this.resultType) {
                  case "lung_healthy":
                    this.results =
                      response.data.Results.WebServiceOutput0[0][
                        "Scored Probabilities_lung_healthy"
                      ] * 100;
                    this.resultText = "Chances of cancer-free lungs";

                    break;
                  case "lung_cancer":
                    this.results =
                      response.data.Results.WebServiceOutput0[0][
                        "Scored Probabilities_lung_cancer"
                      ] * 100;
                    this.resultText = "Chances of lung cancer";
                    break;
                  case "brain_healthy":
                    this.results =
                      response.data.Results.WebServiceOutput0[0][
                        "Scored Probabilities_brain_healthy"
                      ] * 100;
                    this.resultText = "Chances of cancer-free brain";
                    break;
                  case "brain_cancer":
                    this.results =
                      response.data.Results.WebServiceOutput0[0][
                        "Scored Probabilities_brain_healthy"
                      ] * 100;
                    this.resultText = "Chances of brain-cancer";
                    break;
                }

                axios.post("/storeImageResult", {
                  result: this.resultText + ": " + String(this.results).slice(0, 4),
                  id: this.selectedPicture,
                });
                console.log(this.results);
              }, 1500);
            });
        } catch (error) {
          console.log(error.message);
        }
      }
    },
  },

  mounted() {
    this.getAllXrays();
  },
};
</script>

