window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

// try {
//   window.Popper = require('popper.js').default;
//   window.$ = window.jQuery = require('jquery');
// } catch (e) {}

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// require animation on scroll
window.AOS = require('AOS');
AOS.init({

  duration: 1500,
  delay: 100,
});

// alpine tolltip
// import Alpine from "alpinejs";
// import Tooltip from "@ryangjchandler/alpine-tooltip";

// Alpine.plugin(Tooltip);

// window.Alpine = Alpine;
// window.Alpine.start();


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
