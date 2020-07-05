<template>
    <div class="bg-image">
        <page-header></page-header>
        <home-hero></home-Hero>
        <givetem-group />
        <page-footer></page-footer>
    </div>
</template>
<script>
import PageHeader from "../components/PageHeader";
import HomeHero from "../components/HomeHero";
import PageFooter from "../components/PageFooter";
import GivetemGroup from "../components/organisms/GivetemGroup";
export default {
    components: {
        PageHeader,
        HomeHero,
        PageFooter,
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
