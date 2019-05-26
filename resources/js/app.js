import 'simplebar/dist/simplebar.css';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
// var ClassicEditor = require("@ckeditor/ckeditor5-build-classic");

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });


/** New awardCategory form */
const ckEditor = document.getElementById('ckEditor');
if(typeof(ckEditor) !== 'undefined' && ckEditor != null) {
    import(/* webpackChunkName: "js/add-awardCategory-form" */ './components/add-awardCategory-form').then(module => {
        module.initEditor();

        function onSubmit(event, url) {
            module.submitCategoryData(event, url);
        }

        module.setupForm();
    })
}

/** Award Categories */
const awardCategoriesPageMarker = document.getElementById('award_categories_page');
if(typeof(awardCategoriesPageMarker) !== 'undefined' && awardCategoriesPageMarker != null) {
    import(/* webpackChunkName: "js/awardCategories" */ './components/awardCategories')
        .then(module => {
            module.test();
            module.scrollToEditedElement();
            module.deletionLinkSetup()
        })
}

/** Applications */
const applicationsPageMarker = document.getElementById('applications_page');
if(typeof(applicationsPageMarker) !== 'undefined' && applicationsPageMarker != null) {
    import(/* webpackChunkName: "js/applications-page" */ './components/applications-page.js')
        .then(module => {

        })
}

/** Vote Statistics */
const voteStatsPageMarker = document.getElementById('voteStatsPage');
if(typeof(voteStatsPageMarker) !== 'undefined' && voteStatsPageMarker != null) {
    import(/* webpackChunkName: "js/vote-stats"*/ './components/vote-stats')
}