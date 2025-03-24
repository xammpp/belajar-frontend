// Membuat object dengan Literal
// let mhs1 = {
//   nama: 'Bagus Daffa Firmasyah',
//   umur: 24,
//   kelas: '1A',
//   jurusan: 'TKJ',
// };

////////////////////////////////////////////////////////////

// Membuat object dengan function declaration
// function buatObjectSiswa(nama, umur, kelas, jurusan) {
//   let mhs = {};
//   mhs.nama = nama;
//   mhs.umur = umur;
//   mhs.kelas = kelas;
//   mhs.jurusan = jurusan;
//   return mhs;
// }
// let mhs2 = buatObjectSiswa('Dwi Masruroh', 23, '1B', 'Akuntansi');
// let mhs3 = buatObjectSiswa('Niken Ayu', 23, '1A', 'Akuntansi');

////////////////////////////////////////////////////////////

// Membuat object dengan constructor
// function Mahasiswa(nama, umur, kelas, jurusan) {
//   this.nama = nama;
//   this.umur = umur;
//   this.kelas = kelas;
//   this.jurusan = jurusan;
// }
// let mhs4 = new Mahasiswa('Ayu Daffa Firmasyah', 24, '1B', 'TKJ');

////////////////////////////////////////////////////////////

// membuat object dengan function
// cara 1 dengan function declaration
// function halo() {
//   console.log('hallo');
// }
// halo();

// cara 2 dengan object literal
// let obj = {};
// obj.halo = function () {
//   console.log('hello');
// };
// obj.halo();

// cara 3 dengan object construktor
// function Halo() {
//   console.log('hello');
// }
// new Halo();

// this
// var angka = 15;
// console.log(this.angka);

// this dengan object function declaration
// function halo() {
//   console.log(this);
//   console.log('halo');
// }
// this.halo();
// this mengembalikan object global

// this dengan object function literal
// var obj = { a: 1, nama: 'bagus' };
// obj.halo = function () {
//   console.log(this);
//   console.log('hallo');
// };
// obj.halo();
// this mengembalikan object yang bersangkutan

// this dengan object construktor
// function Halo() {
//   console.log(this);
//   console.log('hallo');
// }
// new Halo();

function Mahasiswa(nama, umur) {
  this.nama = nama;
  this.umur = umur;
}

let mhs1 = new Mahasiswa('Bagus', 23);
