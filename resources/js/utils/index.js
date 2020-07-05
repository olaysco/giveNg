export default function isInViewport(el) {

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document. documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document. documentElement.clientWidth)
    );

    // const rect = el.getBoundingClientRect();
    // const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
    // const windowWidth = (window.innerWidth || document.documentElement.clientWidth);
    // const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
    // const horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

    // return (vertInView && horInView);
}
