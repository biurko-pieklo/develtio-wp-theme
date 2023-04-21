jQuery(document).ready(($) => {
    let $header = $('header', document.body);
    let $menu = $('.header-menu', $header);
    let $toggle = $('.mobile-menu-toggle', $header);

    $toggle.on('click', () => {
        $menu.toggle();
    });
});