let nameEl = document.getElementById("name");
let passwordEl = document.getElementById("password");
//let confirmpasswordEl=document.getElementById("confirmpassword").value.trim();
let nameErr = document.getElementById("nameerror")
let passwordErr = document.getElementById("passworderror")
let submitEl = document.getElementById("submit")

function submitFormData() {
    if (nameEl.value.length < 3) {
        nameErr.textContent = "Name shoul be atleast 3 letters";
	isnamevalid="false"
        return;
    } else if (passwordEl.value === "") {
        passwordErr.textContent = "Password should not be empty";
	ispasswordvalid="false"
	return
    } else if (!passwordEl.value.match(/[a-z]/)) {
        passwordErr.textContent = "password should contain atleast 1 lowercase letter";
	ispasswordsmall="false"
        return
    } else if (!passwordEl.value.match(/[A-Z]/)) {
        passwordErr.textContent = "password should contain atleast 1 uppercase letter";
	ispasswordcapital="false"
        return
    } else if (!passwordEl.value.match(/[0-9]/)) {
        passwordErr.textContent = "password should contain atleast 1 numerical number";
        return
    } else {
        nameErr.textContent = ""
        passwordErr.textContent = ""

    }

}

submitEl.addEventListener("submit", function(event) {
    submitFormData()
})
