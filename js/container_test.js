document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('section.py-12 > div.container.mx-auto.px-4 > div.flex.flex-wrap.-mx-4');
    if (container) {
        container.innerHTML = '<div class="w-full px-4 text-green-500">Container found!</div>';
    } else {
        console.error('Container not found');
    }
});