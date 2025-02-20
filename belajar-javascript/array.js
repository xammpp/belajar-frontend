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

// 4. slice
let arr = ['bagus', 'daffa', 'niken'];
arr.splice(2, 0, 'firmansyah');
console.log(arr.join(' - '));

// 5. splice
