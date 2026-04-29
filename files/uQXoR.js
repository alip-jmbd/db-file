import http from 'k6/http';
import { sleep } from 'k6';

export const options = {
  vus: 500,           // Langsung 500 koneksi sekaligus
  duration: '1m',     // Jalankan selama 1 menit
};

export default function () {
  // Pakai URL webmu
  http.get('https://klaim-dana-kaget3.wpye.top/');
}
