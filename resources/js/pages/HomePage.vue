<template>
    <div class="bg-image">
        <page-header></page-header>
        <home-hero></home-Hero>
        <givetem-group />
    </div>
</template>
<script>
import PageHeader from "../components/PageHeader";
import HomeHero from "../components/organisms/OHomeHero";
import GivetemGroup from "../components/organisms/OGivetemGroup";
export default {
    components: {
        PageHeader,
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
