const ketWaktu = document.getElementById("ket_waktu");

function waktu() {
  // array bulan
  list_bulan = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];

  // array hari
  list_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

  // use function date for new date
  const date = new Date();

  // get hari
  const hari = date.getDay();

  // get tanggal
  const tanggal = date.getDate();

  // get bulan
  const bulan = date.getMonth();

  // get tahun
  const tahun = date.getFullYear();

  // get jam
  const jam = date.getHours();

  // get menit
  const menit = date.getMinutes();

  // get detik
  const detik = date.getSeconds();

  // logic keterangan waktu
  if (jam >= 0 && jam <= 11) {
    keterangan_waktu = "Pagi";
  } else if (jam >= 12 && jam <= 15) {
    keterangan_waktu = "Siang";
  } else if (jam >= 16 && jam <= 18) {
    keterangan_waktu = "Sore";
  } else if (jam >= 19 && jam <= 23) {
    keterangan_waktu = "Malam";
  }

  // jika tanggal < 10
  if (tanggal < 10) {
    tanggal_update = "0" + tanggal;
  } else {
    tanggal_update = tanggal;
  }

  // jika menit < 10
  if (menit < 10) {
    menit_update = "0" + menit;
  } else {
    menit_update = menit;
  }

  // jika detik < 10
  if (detik < 10) {
    detik_update = "0" + detik;
  } else {
    detik_update = detik;
  }

  // show jam
  ketWaktu.innerHTML =
    list_hari[hari] +
    " " +
    tanggal_update +
    " " +
    list_bulan[bulan] +
    " " +
    tahun +
    " | " +
    jam +
    ":" +
    menit_update +
    ":" +
    detik_update +
    " " +
    keterangan_waktu;
}

// looping
setInterval(waktu, 0000);
