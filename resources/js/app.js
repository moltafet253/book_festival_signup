/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import jalaali from 'jalaali-js';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import appheader from './components/Book/appheader.vue';
app.component('appheader', appheader);

import underheader from './components/Book/underheader.vue';
app.component('underheader', underheader);

import personalinfo from './components/Book/personalinfo.vue';
app.component('personalinfo', personalinfo);

import contactinfo from './components/Book/contactinfo.vue';
app.component('contactinfo', contactinfo);

import educationalinfo from './components/Book/educationalinfo.vue';
app.component('educationalinfo', educationalinfo);

import teachinginfo from './components/Book/teachinginfo.vue';
app.component('teachinginfo', teachinginfo);

import bluewarn from './components/Book/bluewarn.vue';
app.component('bluewarn', bluewarn);

import posts from './components/Book/posts.vue';
app.component('posts', posts);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

