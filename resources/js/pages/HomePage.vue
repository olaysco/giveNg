<template>
    <div class="bg-image">
        <home-hero></home-Hero>
        <category-group />
        <givetem-group />
    </div>
</template>
<script>
import HomeHero from "../components/organisms/OHomeHero";
import GivetemGroup from "../components/organisms/OGivetemGroup";
import CategoryGroup from "../components/organisms/OCategoryGroup";
export default {
    components: {
        HomeHero,
        GivetemGroup,
        CategoryGroup
    },
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
