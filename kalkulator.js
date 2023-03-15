function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;
    frm.hasil.value = total;

    if (frm.angka.value != "" && frm.angka2.value != "") {
        return true;
      } else {
        alert("Maaf angka belum terisi!");
      }
}

function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    frm.hasil.value = total;

    if (frm.angka.value != "" && frm.angka2.value != "") {
        return true;
      } else {
        alert("Maaf angka belum terisi!");
      }
}

function pembagian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2;
    frm.hasil.value = total;

    if (frm.angka.value != "" && frm.angka2.value != "") {
        return true;
      } else {
        alert("Maaf angka belum terisi!");
      }
}

function perkalian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2;
    frm.hasil.value = total;

    if (frm.angka.value != "" && frm.angka2.value != "") {
        return true;
      } else {
        alert("Maaf angka belum terisi!");
      }
}

function pemangkatan(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 ** a2;
    frm.hasil.value = total;

    if (frm.angka.value != "" && frm.angka2.value != "") {
        return true;
      } else {
        alert("Maaf angka belum terisi!");
      }
}




