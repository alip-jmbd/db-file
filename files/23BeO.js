const axios = require('axios');

const YTDL = async (youtubeUrl) => {
  if (!youtubeUrl) {
    throw new Error("URL YouTube tidak boleh kosong");
  }

  // API URL tidak berubah
  const apiUrl = `https://www.a2zconverter.com/api/files/new-proxy?url=${encodeURIComponent(youtubeUrl)}`;

  const headers = {
    'Referer': 'https://www.a2zconverter.com/youtube-video-downloader',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36'
  };

  try {
    const response = await axios.get(apiUrl, {
      headers: headers
    });
    return response.data;
  } catch (error) {
    console.error(`Gagal mengambil data: ${error.message}`);
    return null;
  }
};

// Fungsi untuk memfilter dan menampilkan hasil
const displayFilteredResults = (data) => {
  if (!data || !data.videos || !data.audios) {
    console.log("Tidak dapat menemukan format video atau audio.");
    return;
  }

  console.log(`\nJudul: ${data.title}\n`);

  // --- LOGIKA BARU UNTUK MEMILIH VIDEO ---
  const uniqueVideos = new Map();
  data.videos.forEach(video => {
    // Hanya tambahkan video jika resolusi tersebut belum ada di Map
    if (video.quality && !uniqueVideos.has(video.quality)) {
      uniqueVideos.set(video.quality, video);
    }
  });

  // --- LOGIKA BARU UNTUK MEMILIH AUDIO ---
  // Ambil audio pertama saja dari daftar
  const selectedAudio = data.audios.length > 0 ? data.audios[0] : null;

  // --- TAMPILKAN HASIL YANG SUDAH DIFILTER ---
  console.log("--- Tautan Video (Satu per Resolusi) ---");
  if (uniqueVideos.size > 0) {
    uniqueVideos.forEach(video => {
      console.log(`[${video.quality}] (${video.ext}) - ${video.sizeInBytes || 'Ukuran tidak diketahui'}`);
      console.log(`   URL: ${video.url}\n`);
    });
  } else {
    console.log("Tidak ada format video yang ditemukan.");
  }

  console.log("\n--- Tautan Audio (Satu Opsi) ---");
  if (selectedAudio) {
    console.log(`[${selectedAudio.quality}] (${selectedAudio.ext}) - ${selectedAudio.sizeInBytes || 'Ukuran tidak diketahui'}`);
    console.log(`   URL: ${selectedAudio.url}\n`);
  } else {
    console.log("Tidak ada format audio yang ditemukan.");
  }
};


// Bagian CLI tidak berubah
const url = process.argv[2];

if (!url) {
  console.log("Silakan berikan URL YouTube sebagai argumen.");
  console.log("Contoh: node ytdl.js https://www.youtube.com/watch?v=dQw4w9WgXcQ");
  process.exit(1);
}

YTDL(url)
  .then(data => {
    if (data) {
      // Panggil fungsi baru untuk menampilkan hasil yang sudah difilter
      displayFilteredResults(data);
    }
  })
  .catch(error => {
    console.error(error.message);
  });
