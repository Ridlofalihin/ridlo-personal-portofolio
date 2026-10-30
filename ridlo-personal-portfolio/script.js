
// Mengambil elemen menu dan tombol tema
const menuToggle = document.querySelector('#menuToggle');
const navLinks = document.querySelector('#navLinks');
const themeToggle = document.querySelector('#themeToggle');

// Membuka dan menutup menu navigasi
menuToggle.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');

    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.textContent = isOpen ? '×' : '☰';
});

// Menutup menu setelah tautan navigasi diklik
document.querySelectorAll('.nav-links a').forEach((link) => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('open');

        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.textContent = '☰';
    });
});

// Mengubah tema terang dan gelap
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark');

    const isDark = document.body.classList.contains('dark');

    themeToggle.textContent = isDark ? '☀' : '☾';

    themeToggle.setAttribute(
        'aria-label',
        isDark ? 'Aktifkan tema terang' : 'Aktifkan tema gelap'
    );
});

// Menampilkan tahun saat ini secara otomatis
document.querySelector('#year').textContent = new Date().getFullYear();
