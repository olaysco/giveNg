<template>
	<div>
		<page-hero></page-hero>
		<!-- <home-actions></home-actions> -->
		<home-dos></home-dos>
		<home-stat></home-stat>
		<home-impacts></home-impacts>
		<home-event></home-event>
	</div>
</template>
<script>
import PageHero from "../../components/organisms/OEduHero";
import HomeActions from "../../components/organisms/OHomeActions";
import HomeDos from "../../components/organisms/OHomeDos";
import HomeStat from "../../components/organisms/OHomeStat";
import HomeImpacts from "../../components/organisms/OHomeImpacts";
import HomeEvent from "../../components/organisms/OHomeEvent";
export default {
	components: {
		PageHero,
		HomeActions,
		HomeDos,
		HomeStat,
		HomeImpacts,
		HomeEvent
	}
};
</script>
<style scoped>
</style>
