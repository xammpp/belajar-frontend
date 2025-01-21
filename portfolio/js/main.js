// Menu Toggle
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclik = () => {
  menuIcon.classList.toggle('fa-xmark');
  navbar.classList.toggle('active');
};

// Scroll section active link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
  let top = window.scrollY;

  sections.forEach((sec) => {
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

    if (top >= offset && top < offset + height) {
      navLinks.forEach((link) => link.classList.remove('active')); // Hapus semua active sebelum menambah baru
      let activeLink = document.querySelector(`header nav a[href="#${id}"]`);
      if (activeLink) {
        activeLink.classList.add('active');
      }
    }
  });

  // Sticky Header
  let header = document.querySelector('header');
  header.classList.toggle('sticky', top > 100);

  // Saat scroll, pastikan navbar tertutup (hanya untuk tampilan mobile)
  menuIcon.classList.remove('fa-xmark');
  navbar.classList.remove('active');
};

// Toggle Navbar saat diklik (untuk mode mobile)
menuIcon.addEventListener('click', () => {
  menuIcon.classList.toggle('fa-xmark'); // Mengubah ikon
  navbar.classList.toggle('active'); // Menampilkan navbar
});

// scroll reveal
ScrollReveal({
  distance: '80px',
  duration: 2000,
  delay: 200,
});

ScrollReveal().reveal('.home-content, heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .skill-container, .portfolio-box, .contact from', { origin: 'buttom' });
ScrollReveal().reveal('.home-contact h1, .about-img', { origin: 'left' });
ScrollReveal().reveal('.home-contact p, .about-content', { origin: 'right' });

const typed = new Typed('.multiple-text', {
  strings: ['Web Developer', 'Frontend Developer', 'Backend Developer'],
  typeSpeed: 70,
  backSpeed: 70,
  backDelay: 1000,
  loop: true,
});

document.getElementById('contact-form').addEventListener('submit', function (event) {
  event.preventDefault(); // Mencegah halaman refresh

  Swal.fire({
    title: 'Berhasil!',
    text: 'Pesan Anda berhasil dikirim.',
    icon: 'success',
    confirmButtonText: 'OK',
    timer: 3000, // Alert otomatis tertutup setelah 3 detik
    showConfirmButton: false,
  });

  this.reset(); // Mengosongkan form setelah pesan terkirim
});
