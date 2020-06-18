<template>
    <div class="bg-image">
        <page-header></page-header>
        <home-hero></home-Hero>

        <page-footer></page-footer>
    </div>
</template>
<script>
import PageHeader from "../components/PageHeader";
import HomeHero from "../components/HomeHero";
import HomeActions from "../components/HomeActions";
import HomeDos from "../components/HomeDos";
import HomeStat from "../components/HomeStat";
import HomeImpacts from "../components/HomeImpacts";
import HomeEvent from "../components/HomeEvent";
import PageFooter from "../components/PageFooter"
export default {
    components: {
        PageHeader,
        HomeHero,
        HomeActions,
        HomeDos,
        HomeStat,
        HomeImpacts,
        HomeEvent,
        PageFooter
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
