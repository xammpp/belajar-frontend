// Manipulasi Array

// 1. Menambah isi array

// Cara 1
// let arr = ['bagus', 'daffa', 'firmasyah'];
// console.log(arr);

// Cara 2
// let arr = [];
// arr[0] = 'bagus';
// arr[1] = 'daffa';
// arr[2] = 'firmasyah';
// arr[6] = 'niken';
// console.log(arr);

// 2. Manghapus isi array secara manual
// let arr = ['bagus', 'daffa', 'firmansyah'];
// arr[1] = undefined;
// console.log(arr);

// 3. Menampilkan isi array menggunakana looping
// let arr = ['bagus', 'daffa', 'firmansyah', 'niken', 'ayu'];
// for (i = 0; i < arr.length; i++) {
//   console.log('Mahasiswa ke: ' + (i + 1) + ' ' + arr[i]);
// }

// Method pada array
// 1. join digunakan untuk menampilkan data array secara dinamis atau menggunakan method pada JS
// let arr = ['bagus', 'daffa', 'firmansyah', 'niken', 'ayu'];
// console.log(arr.join('-'));

// 2. push dan pop igunakan untuk menambah dan menghapus data array dari akhir
// let arr = ['bagus', 'daffa', 'firmansyah', 'niken', 'ayu'];
// arr.push('dwi');
// arr.pop();
// console.log(arr.join(' - '));

// 3. unshift dan shift digunakan untuk menambah dan menghapus data array dari awal
// let arr = ['bagus', 'daffa', 'firmansyah'];
// arr.unshift('niken');
// arr.shift();
// console.log(arr.join(' - '));

// 4. splice digunakan untuk menyisipkan data pada array javascript
// let arr = ['bagus', 'daffa', 'niken'];
// arr.splice(1, 2, 'firmansyah');
// console.log(arr.join(' - '));

// 5. slice digunakan untuk memotong data yang di inginkan pada array javascript
// let arr = ['bagus', 'daffa', 'niken', 'firmasyah', 'ayu'];
// let arr2 = arr.slice(0, 2);
// console.log(arr2.join(' - '));

// 6. forEach
// let arr = [1, 2, 3, 4, 5, 6, 7, 8];
// arr.forEach(function (e) {
//   console.log(e);
// });

// let arr = ['bagus', 'daffa', 'firmasyah'];
// arr.forEach(function (e, i) {
//   console.log('Mahasiswa ke - ' + (i + 1) + ' ' + e);
// });

// 7. map
// let angka = [1, 3, 2, 4, 5, 7, 6, 8, 9];
// let arr = angka.map(function (e) {
//   return e * 2;
// });
// console.log(arr.join(' - '));

// 8. sort digunakan untuk mengurutkan data pada array
// let angka = [1, 3, 2, 11, 15, 21, 4, 5, 7, 6, 8, 9];
// angka.sort(function (e, i) {
//   return e - i;
// });
// console.log(angka.join(' - '));

// 9. filter
// let angka = [1, 3, 2, 11, 15, 21, 4, 5, 7, 6, 8, 9];
// angka.sort(function (e, i) {
//   return e - i;
// });

// let arr = angka.filter(function (e) {
//   return e > 5;
// });
// console.log(arr.join(' - '));

// 10. find
// let angka = [1, 3, 2, 11, 15, 21, 4, 5, 7, 6, 8, 9];
// angka.sort(function (e, i) {
//   return e - i;
// });

// let arr = angka.find(function (e) {
//   return e > 6;
// });
// console.log(arr);

// Latihan membuat program
