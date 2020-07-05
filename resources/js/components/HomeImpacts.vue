<template>
  <div class="px-10 py-12" id="impacts">
      <div class="slide-control mb-2">
          <span v-for="i in [1,2,3]" :key="i" class="circle w-3 h-3 border-blue-900 border-solid border mr-4 inline-block"></span>
      </div>
      <div class="slides w-full flex items-center justify-center flex-col sm:flex-row sm:justify-end relative">
            <div class="slide-text bg-blue-900 text-white p-8 rounded shadow  sm:w-2/3 sm:absolute sm:left-0  z-10">
                <p class="font-bold pb-8">“I am a person who was helped by this organization.
                    Before they gave me assistance,
                    I was really struggling with my farm, but now my life is better.”</p>
                <small class="text-white text-xs font-thin">BALKI, FARMER AND MOTHER IN NIGERIA</small>
            </div>
          <div class="w-full sm:w-2/4">
              <img src="/img/image-2.jpg" alt="">
          </div>
      </div>
  </div>

</template>
<script>
import CardBase from "../components/CardBase";
export default {
    components: {
        CardBase
    }
}
</script>
<style scoped>
.slide-control>span:first-child{
    background-color: #2a4365;
}
</style>
