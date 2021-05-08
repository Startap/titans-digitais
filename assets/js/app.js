function goBack() {
    window.history.back();
}

function scrollToTop() {
    let formPosition = document.getElementById('subscription').offsetTop;

    window.scroll({
        top: (formPosition - 20),
        left: 0,
        behavior: 'smooth'
    });
}

window.document.onreadystatechange = () => {
    if (window.document.readyState === "complete") {
        const scrollObjs = document.getElementsByClassName('scroll-top');
        for (let scrollObj of scrollObjs) {
            scrollObj.addEventListener('click', scrollToTop);
        }
    }
}