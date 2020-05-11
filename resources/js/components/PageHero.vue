<template>
  <div>
    <div class="flex bg-blue-300 w-100 hero bg-no-repeat bg- bg-center bg-cover sm:bg-center md:bg-cover md:bg-top md:flex justify-center sm:justify-start">
        <CardHero class="mt-24 sm:ml-10"></CardHero>
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
        height: calc(100vh - (90px + 0px));
        background-image: url("/img/child.png");
    }
</style>
