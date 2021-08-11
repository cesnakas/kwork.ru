require('appJs/bootstrap.js');
require('appJs/live-tabs.js');

document.querySelector('.order__right-toggle').onclick = function() {
    document.querySelector('.order__body').classList.toggle('hidden');
    // document.querySelector('.order__right-toggle').classList.toggle('upend');
}
