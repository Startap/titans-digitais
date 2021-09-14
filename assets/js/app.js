var modalRoot;

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

function setupModal() {
    var triggerModal, modalContent, closeButton;

    modalRoot = document.querySelector("#modalFormulario");
    closeButton = document.querySelector("#modalFormulario .close");
    triggerModal = document.querySelector("#button__container button");
    modalContent = document.querySelector(".modal__content");

    modalRoot.addEventListener("click", rootModalClick);
    modalRoot.addEventListener("click", rootModalClick);
    triggerModal.addEventListener("click", openModal);
    modalContent.addEventListener("click", modalClick);
}

function rootModalClick () {
    modalRoot.classList.remove("show__modal");
}

function openModal() {
    modalRoot.classList.add('show__modal');
}

function modalClick(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    return false;
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

    setupModal();
}