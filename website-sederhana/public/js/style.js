function changeActive(clickedElement) {
    // Dapatkan semua elemen dengan kelas "nav-link"
    var navLinks = document.querySelectorAll(".nav-link");

    // Hapus kelas "active" dari semua elemen
    navLinks.forEach(function (link) {
        link.classList.remove("active");
    });

    // Tambahkan kelas "active" hanya pada elemen yang diklik
    clickedElement.classList.add("active");
}
