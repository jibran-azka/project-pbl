<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <style>
      .angka-satu {
        font-size: 80px;
        font-weight: bold;
        fill: currentColor; /* Menggunakan warna teks saat ini */
      }
      .grafik-batang {
        fill: currentColor; /* Menggunakan warna teks saat ini */
        opacity: 0.7; /* Sedikit transparan agar terlihat berbeda dari angka */
      }
      .garis-grafik {
        fill: none;
        stroke: currentColor; /* Menggunakan warna teks saat ini */
        stroke-width: 2;
      }
    </style>
  
    <text x="10" y="80" class="angka-satu">1</text>
  
    <rect x="35" y="60" width="8" height="20" class="grafik-batang" />
    <rect x="45" y="45" width="8" height="35" class="grafik-batang" />
    <rect x="55" y="55" width="8" height="25" class="grafik-batang" />
    <rect x="65" y="30" width="8" height="50" class="grafik-batang" />
  
    <polyline points="39,80 49,65 59,75 69,50" class="garis-grafik" />
  </svg>