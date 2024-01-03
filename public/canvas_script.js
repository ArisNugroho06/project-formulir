// canvas_script.js
document.addEventListener('DOMContentLoaded', function() {
    var canvas = document.getElementById('ttd');
    var context = canvas.getContext('2d');
 
    // Logika untuk menggambar di canvas
 
    // Menangkap data gambar saat formulir dikirim
    document.getElementById('form').addEventListener('submit', function() {
       var canvasData = canvas.toDataURL(); // Mendapatkan data gambar dalam format base64
       document.getElementById('ttd').value = canvasData;
    });
 });