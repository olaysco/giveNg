<template>
  <div>
      <CardBase>
          <div class="md:flex w-full">

              <div class="bg-white p-12 rounded shadow relative">
                  <pop-text>TRENDING ISSUE</pop-text>
                  <h1 class="text-4xl text-blue-900 font-bold">Corrona virus has led to lockdown and cause hunger</h1>
                  <a href="#" class="mt-16 text block underline">Read more about this social cause</a>
              </div>
          </div>
      </CardBase>
  </div>
</template>
<script>
import CardBase from "../components/CardBase"
import PopText from "../components/PopText"
export default {
    components: {
        CardBase,
        PopText
    }
}
</script>
<style scoped>

</style>
