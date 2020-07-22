<template>
    <div class="bg-image" nativeOnScroll='handleScrol'>
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
    },
    methods: {
        handleScrol() {
            console.log('handles sic')
        }
    },
    mounted(){
        window.addEventListener('scroll', this.handleScrol);
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
