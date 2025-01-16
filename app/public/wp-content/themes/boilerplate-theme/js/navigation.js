document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.querySelector('.menu-icon');
    const dropdownMenu = document.querySelector('.mobile');

    const hamburgerIcon = `${menuIcon.src}`;
    const crossIcon = `${menuIcon.src.replace('hamburger-menu-black.png', 'cross-black.png')}`;

    menuIcon.addEventListener('click', () => {
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
            menuIcon.src = hamburgerIcon;
        } else {
            dropdownMenu.style.display = 'block';
            menuIcon.src = crossIcon;
        }
    });

    document.addEventListener('click', (event) => {
        if (!menuIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
            menuIcon.src = hamburgerIcon;
        }
    });
});