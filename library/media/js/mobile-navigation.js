/* Accessible navigation controls for narrow screens. */
(function () {
    'use strict';

    function setupNavigation() {
        var navigation = document.getElementById('primary-navigation');
        var toggle = document.querySelector('.mobile-menu-toggle');

        if (!navigation || !toggle) {
            return;
        }

        toggle.addEventListener('click', function () {
            var isOpen = navigation.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', String(isOpen));
        });

        navigation.querySelectorAll('li.menu-item-has-children, li.page_item_has_children').forEach(function (item, index) {
            var submenu = item.querySelector(':scope > ul');
            if (!submenu) {
                return;
            }

            var submenuId = 'submenu-' + index;
            submenu.id = submenuId;

            var submenuToggle = document.createElement('button');
            submenuToggle.type = 'button';
            submenuToggle.className = 'submenu-toggle';
            submenuToggle.setAttribute('aria-controls', submenuId);
            submenuToggle.setAttribute('aria-expanded', 'false');
            submenuToggle.setAttribute('aria-label', 'Alt menüyü aç');
            submenuToggle.innerHTML = '<span aria-hidden="true"></span>';
            item.insertBefore(submenuToggle, submenu);

            submenuToggle.addEventListener('click', function () {
                var isOpen = item.classList.toggle('submenu-open');
                submenuToggle.setAttribute('aria-expanded', String(isOpen));
                submenuToggle.setAttribute('aria-label', isOpen ? 'Alt menüyü kapat' : 'Alt menüyü aç');
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupNavigation);
    } else {
        setupNavigation();
    }
}());
