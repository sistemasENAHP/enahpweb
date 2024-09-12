// import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '5dade7404be34deb0ac4',
    cluster: 'us2',
    forceTLS: true
  });


const pusher = new Pusher('1ec46d32-dd36-47e3-8d16-65e747303989', {
    cluster: 'us2', // Replace with your cluster name
    forceTLS: true,
    authEndpoint: '/broadcasting/auth', // Assuming you're using Laravel's broadcasting
});

