<template>
  <div class="pt-90">
    <div class="flex bg-blue-300 w-100 hero bg-no-repeat bg- bg-center bg-cover sm:bg-center md:bg-cover md:bg-top md:flex justify-center sm:justify-start">
        <CardHero class="mt-auto mb-auto sm:ml-10 animate__animated animate__jello "></CardHero>
    </div>
  </div>

</template>
<script>
import CardHero from "../components/CardHero"
export default {
    components: {
        CardHero
    }
}
</script>
<style scoped>
    .hero{
        height: calc(100vh - (0px + 0px));
        background-image: url("/img/child.png");
    }
</style>
