// validasi untuk form register

const btnRegister = document.getElementById("btn_submit_reg");

btnRegister.addEventListener("click", function () {
  formValidation();
});

function formValidation() {
  // rule all priority [ISIAN WAJIB DI ISI]
  // (document.forms["name dari forms"][name dari inout].value = ?)

  // username validation
  if (document.forms["form-register"]["username_reg"].value == "") {
    alert("aduh maaf, username tidak boleh kosng");
    document.forms["form-register"]["username_reg"].focus();

    return false;
  }
  // // sandi validation
  if (document.forms["form-register"]["pwd_asli_reg"].value == "") {
    alert("aduh maaf, sandi tidak boleh kosng");
    document.forms["form-register"]["pwd_asli_reg"].focus();
    return false;
  }
  // nama lengkap validation
  if (document.forms["form-register"]["nama_lengkap_reg"].value == "") {
    alert("aduh maaf, nama tidak boleh kosng");
    document.forms["form-register"]["nama_lengkap_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["agama_reg"].selectedIndex < 1) {
    alert("aduh maaf, mohon pilih agama");
    document.forms["form-register"]["agama_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["umur_reg"].value == "") {
    alert("aduh maaf, umur tidak boleh kosong");
    document.forms["form-register"]["umur_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["prov_reg"].selectedIndex < 1) {
    alert("aduh maaf, mohon pilih provinsi");
    document.forms["form-register"]["prov_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["kab_reg"].selectedIndex < 1) {
    alert("aduh maaf, mohon pilih kabupaten");
    document.forms["form-register"]["kab_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["kecamatan_reg"].selectedIndex < 1) {
    alert("aduh maaf, mohon pilih kecamatan");
    document.forms["form-register"]["kecamatan_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["kelurahan_reg"].selectedIndex < 1) {
    alert("aduh maaf, mohon pilih kelurahan");
    document.forms["form-register"]["kelurahan_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["alamat_reg"].value == "") {
    alert("aduh maaf, alamat tidak boleh kosong");
    document.forms["form-register"]["alamat_reg"].focus();
    return false;
  }
  if (document.forms["form-register"]["kodepos_reg"].selectedIndex < 1) {
    alert("aduh maaf, kodepos tidak boleh kosong");
    document.forms["form-register"]["kodepos_reg"].focus();
    return false;
  }
  if ((document.forms["form-register"]["nohp_reg"].value = "")) {
    alert("aduh maaf, nomor hp tidak boleh kosong");
    document.forms["form-register"]["nohp_reg"].focus();
    return false;
  }
}

// rule for input text [hanya teks string yang bisa di tambahkan, jika users memasukan code programing html,css,js,py danlainnya
//                      maka tidak di ijinkan dan di suruh mengulangi pendaftaran
//                       tujuan mencegah peretasan aplikasi oleh hacker]

// normal rule    1 -> username [1 huruf kapital, 1 angka, minimal 6 huruf]
// normal rule    2 -> sandi [1 huruf kapital, 1 angka, 1 sysmbol, minimal 8 huruf]
// not use rule   3 -> nama lengkap [tidak ada karena nama bersifat tidak unik]
// normal rule    4 -> jenis kelamin [pilih salah satu]
// not use rule   5 -> agama [tidak ada]
// normal  rule   6 -> umur [hanya angka, 3 angka maksmimal dan 150 tahun digit ga mungkin kan ada manusia berusia 200 taun]

// special rule   7 -> provinsi [jika milih provinsi A maka kabupaten yang tersedia
//                      khusus di provinsi A dan begitu pada provinsi lain]
// special rule   8 -> kabupaten [turunan dari provinsi, jika milih kabupaten A yang ada di provinsi yang sudah di pilih,
//                      maka kecamatan yang tersedia khusus di kabupaten yang di pilih yang berada pada 1 provinsi yang di pilih sebeumnya ]
// special rule   9 -> kecamatan [turunan dari kabupaten, jika milih kecamatan A yang adadi kabupaten dan provinsi yang di pilij
//                      maka kelurahan yang tersedia khusus di provinsi, kabupaten dan kecamatan yang di pilih sebelumnya]
// special rule   10 -> kelurahan [turunan dari kecamatan, jika milih provinsi, kabupaten kcamatan yang sudah di pilih,
//                      kelurahan yang tersedia adalah yang sudah di pilih pada provinsi kab, dan kecamatansebelumnya]
// special rule   11 ->kodepos (mengikuti dari provinsi, kabupaten, kecamatan kelurahan)

// normal rule    12 -> hanya angka
