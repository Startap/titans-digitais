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

    let progressBar = document.querySelector('.progress__bar .indicator')
    if (progressBar) {
        let progressBarCurrent = 0
        let intervalProgress = setInterval(handleProgressBar, 50)

        progressBar.classList.add('animate__progressbar')

        function handleProgressBar() {
            progressBarCurrent++
            progressBar.innerHTML = progressBarCurrent + '%'

            if (progressBarCurrent > 79)
                clearInterval(intervalProgress)
        }
    }
}