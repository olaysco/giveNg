<template>
  <div class="px-10 py-12 bg-blue-900">
      <div>
        <span class="px-4 py-2 bg-white text-sm">WHAT WE DO</span>
      </div>
      <div class="py-10">
          <h3 class="text-3xl text-sm text-white font-bold">Our mission is to create sustainable and conducive schooling environment for out of school children while providing quality support.</h3>
      </div>
        <div class="box-card grid grid-cols-1" :class="[`sm:grid-cols-${missions.length}`]">
            <div class="flex justify-between" v-for="mission in missions" :key="mission.title">
                <card-base class=" px-3 py-5 relative">
                    <div class="bg-white rounded shadow p-5">
                        <div class="image outsted">
                            <img :src="`/img/${mission.img}`" :alt="mission.title" class="rounded">
                        </div>
                        <div>
                            <h4 class="text-2xl pt-5" v-text="mission.title"></h4>
                            <p v-text="mission.body" class="pt-5"></p>
                            <a href="#" class="text-white text-sm bg-blue-500 py-3 px-6 rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500 mt-5 inline-block">Read More</a>
                        </div>
                    </div>
                </card-base>

            </div>
        </div>
  </div>

</template>
<script>
import CardBase from "../components/CardBase";
export default {
    data(){
        return {
            missions:[
                {title: "Education", img: "image-4.jpg",
                body: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi felis, " +
                "auctor vitae vestibulum vel, consequat eu dolor. Nam pellentesque euismod laoreet."},
                {title: "IDP Support", img: "image-4.jpg",
                body: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi felis, " +
                "auctor vitae vestibulum vel, consequat eu dolor. Nam pellentesque euismod laoreet."},
                {title: "Local Farming", img: "image-4.jpg",
                body: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi felis, " +
                "auctor vitae vestibulum vel, consequat eu dolor. Nam pellentesque euismod laoreet."},
            ]
        }
    },
    components: {
        CardBase
    }
}
</script>
<style scoped>
.outsted{
    margin: -2em -2em 0px 0px;
}
</style>
