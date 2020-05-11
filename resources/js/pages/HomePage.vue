<template>
    <div>
        <page-header></page-header>
        <page-hero></page-Hero>
        <home-actions></home-actions>
        <home-dos></home-dos>
        <home-stat></home-stat>
        <home-impacts></home-impacts>
        <home-event></home-event>
        <page-footer></page-footer>
    </div>
</template>
<script>
import PageHeader from "../components/PageHeader";
import PageHero from "../components/PageHero";
import HomeActions from "../components/HomeActions";
import HomeDos from "../components/HomeDos";
import HomeStat from "../components/HomeStat";
import HomeImpacts from "../components/HomeImpacts";
import HomeEvent from "../components/HomeEvent";
import PageFooter from "../components/PageFooter"
export default {
    components: {
        PageHeader,
        PageHero,
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
</style>
