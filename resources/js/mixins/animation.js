export default {
    methods: {
		beforeLeave(element) {
			this.prevHeight = getComputedStyle(element).height;
		},
		enter(element) {
			const { height } = getComputedStyle(element);
			element.style.height = this.prevHeight;
			setTimeout(() => {
				element.style.height = height;
			});
        },
		afterEnter(element) {
			element.style.height = "auto";
			scrollTo(document.getElementsByTagName("body")[0]);
		}
	}
}
