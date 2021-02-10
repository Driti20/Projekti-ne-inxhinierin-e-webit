function validate1() {
    var username = document.getElementById("Username").value;
    var password = document.getElementById("Password").value;
    if (username == null || username == "") {
        alert("Ju lutem plotesoni fushen Username.");
        return false;
    }
    if (password == null || password == "") {
        alert("Ju lutem plotesoni fushen Password.");
        return false;
    }
    alert('Ju u kyqet me sukses');
} 
function validate2() {
    var username = document.getElementById("Username").value;
    var password = document.getElementById("Password").value;
    var Emri = document.getElementById("Emri").value;
    var Mbiemri = document.getElementById("Mbiemri").value;
    var Email = document.getElementById("Email").value;
    var Cpassword = document.getElementById("Cpassword").value;
    if (Emri== null || Emri== "") {
        alert("Ju lutem plotesoni fushen Emri.");
        return false;
    }
    if (Mbiemri== null || Mbiemri== "") {
        alert("Ju lutem plotesoni fushen Mbiemri.");
        return false;
    }
    if (Email== null || Email== "") {
        alert("Ju lutem plotesoni fushen Email.");
        return false;
    }
    if (username== null || username== "") {
            alert("Ju lutem plotesoni fushen Username.");
            return false;
        }

    if (password == null || password == "") {
        alert("Ju lutem plotesoni fushen Password.");
        return false;
    }
    if (Cpassword== null || Cpassword== "") {
            alert("Ju lutem plotesoni fushen Confirm Passworg.");
            return false;
        }
    alert('Ju u Regjistruat me sukses');
} 
    