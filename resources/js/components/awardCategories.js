export function test() {
    if(window.location.hash) {
        console.log('hash--->', window.location.hash);
    }
}

export function scrollToEditedElement() {
    const elementId = getHash();
    if(!elementId) {
        return;
    }
    const element = document.getElementById(elementId);
    console.log(element);
    const elementTop = element.getBoundingClientRect().y;

    // window.scrollTo({
    //     top: 0,
    //     left: 0,
    //     behavior: 'smooth'
    // })
    // window.scrollBy({
    //     top: elementTop -120,
    //     left: 0,
    //     behavior: 'smooth'
    // })
    element.scrollIntoView({
        behavior: 'auto', 
        block: 'center',
        inline: 'start'
    });
    // window.scrollBy({
    //     top: -element.getBoundingClientRect().height,
    //     left: 0,
    //     behavior: 'smooth'
    // })
}

function getHash() {
    if(window.location.hash) {
        return window.location.hash.substring(1);
    } else {
        return null;
    }
}

const modal = document.getElementById('deleteConfirmModal');
const showModal = document.getElementById('showModal');
const modalDeleteLink = document.getElementById('deleteLink');

export function deletionLinkSetup() {
    provideLinksEventHandlers();
    provideDeleteLinkEventHandler();
}

function provideLinksEventHandlers() {
    const links = document.querySelectorAll('.deletor');
    for(let link of links) {
        link.addEventListener('click', e => {
            e.preventDefault();

            const categoryTitle = e.target.parentElement.dataset.title;
            const categoryId = e.target.parentElement.dataset.id;
            console.log('category title:', e.target.parentElement);
            const modalBody = document.querySelector('#deleteConfirmModal .modal-body');
            modalBody.innerHTML = 'Are you sure you want to delete "' + categoryTitle + '"';

            modalDeleteLink.href = modalDeleteLink.href + '/' + categoryId;

            showModal.click()
        })
    }
}

function provideDeleteLinkEventHandler() {
    modalDeleteLink.addEventListener('click', e => {
        e.preventDefault();

        const link = e.target.href;
        fetch(link)
            .then(res => res.json())
            .then(response => {
                if(!response.error) {
                    if(window.location.hash){
                        window.location.replace(window.location.href.split('#')[0])
                    } else {
                        location.reload()
                    }
                }
            })
    })
}
