

// Dapatkan elemen .main-tagline
const mainTagline = document.querySelector('.main-tagline');

// Tambahkan event listener scroll
window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    // Sesuaikan nilai translateY sesuai dengan pergerakan scroll yang diinginkan
    mainTagline.style.transform = `translateY(${scrollPosition * 0.4}px)`;
});


class CardAnimator {
  constructor() {
    this.cards = document.querySelectorAll("#card-tentang .card");
    this.observer = new IntersectionObserver(this.handleCardAnimation.bind(this), {
      threshold: 0.5,
    });

    // Mulai pemantauan saat dokumen diinisialisasi
    this.init();
  }

  init() {
    this.cards.forEach((card) => {
      this.observer.observe(card);
    });
  }

  handleCardAnimation(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
        observer.unobserve(entry.target);
      }
    });
  }
}

// Inisialisasi class CardAnimator
const cardAnimator = new CardAnimator();


// PROSES
// Mendapatkan referensi ke elemen-elemen yang akan diberi efek paralaks
const prosesContainer = document.getElementById("proses");

// Menambahkan event listener untuk event scroll
window.addEventListener("scroll", function() {
  // Mendapatkan posisi scroll
  const scrollPosition = window.pageYOffset;

  // Posisi ketika efek paralaks diaktifkan
  const activationPosition = 1400;

  // Mengaktifkan efek paralaks hanya jika posisi scroll melebihi activationPosition
  if (scrollPosition > activationPosition) {
    // Menghitung pergeseran vertikal sesuai dengan posisi scroll
    const verticalShift = (scrollPosition - activationPosition) * 1;

    // Menggunakan transform CSS untuk menerapkan efek paralaks
    prosesContainer.style.transform = `translateY(-${verticalShift}px)`;
  } else {
    // Reset transform jika posisi scroll di bawah activationPosition
    prosesContainer.style.transform = "translateY(0)";
  }
});




