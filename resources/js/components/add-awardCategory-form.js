import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

let editor;
const ckEditor = document.getElementById('ckEditor');

export function setupForm() {
    const addCategoryForm = document.getElementById('category-form');
    addCategoryForm.addEventListener('submit', e => {
        submitCategoryData(e, e.target.action);
    });

    const inputElements = document.querySelectorAll('#category-form input, textarea');
    for(let el of inputElements) {
        el.addEventListener('focus', () => {
            clearSubmitSuccessAnimation();
        })
    }
}

export function initEditor() {
    ClassicEditor
        .create(ckEditor, {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
        })
        .then(ckEditor => {
            editor = ckEditor;
        })
        .catch(error => {
            console.log(error);
        });
}

function submitCategoryData(event, url) {
    event.preventDefault();

    const form = document.getElementById('category-form');
    const formData = new FormData(form);

    //For debugging. Expendable.
    for(let entry of formData.entries()) {
        console.log(entry[0], entry[1]);
    }

    postData(url, formData).then(result => {
        console.log(result);
        if(!result['error']) {
            submitSuccessAnimation();
            form.reset();
            editor.setData('');
            if(editingOperation(url)){
                window.location = '../award_categories#' + getIndex(url);
            }
        }
    })
}

function postData(url, formData) {
    return fetch(url, {
        method: 'POST',
        body: formData
    }).then(res => res.json())
}

function submitSuccessAnimation() {
    let submitSuccess = document.querySelector('#submit-success');
    submitSuccess.classList.remove('opacity-0');
}

function clearSubmitSuccessAnimation() {
    let submitSuccess = document.querySelector('#submit-success');
    submitSuccess.classList.add('opacity-0');
}

function editingOperation(url) {
    return /\d$/.test(url);
}

function getIndex(url) {
    let index = url.substring(url.lastIndexOf('/')+1);
    return parseInt(index, 10);
}