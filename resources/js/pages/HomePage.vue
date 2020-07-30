<template>
    <div class="bg-image" nativeOnScroll='handleScrol'>
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
