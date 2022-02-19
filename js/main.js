function show() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('visible');
    document.body.style.overflow = 'hidden';
}
function hide() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.remove('visible');
    document.body.style.overflow = '';
}
function toggle() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.querySelector('.blocker').onclick = hide;
    sidebar.classList.contains('visible') ? hide() : show();
}