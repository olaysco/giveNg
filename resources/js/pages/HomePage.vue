<template>
    <div class="bg-image">
        <home-hero></home-Hero>
        <givetem-group />
    </div>
</template>
<script>
import HomeHero from "../components/organisms/OHomeHero";
import GivetemGroup from "../components/organisms/OGivetemGroup";
export default {
    components: {
        HomeHero,
        GivetemGroup
    }
}
</script>
<style scoped>
.bg-image{
    background-image: url("/img/give-bg.svg");
	background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
</style>
