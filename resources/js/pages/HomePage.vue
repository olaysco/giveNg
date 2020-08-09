<template>
    <div class="bg-image">
        <home-hero></home-Hero>
        <category-group />
        <h1 class="px-10 font-semibold text-xl text-gray-700">New Givetems</h1>
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
    created() {
        this.$store.commit("setHeaderBg", "bg-blue-deep");
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
