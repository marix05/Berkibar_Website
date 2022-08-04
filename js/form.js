// focus dan blur effect input dan select
const inputs = document.querySelectorAll(".input");

inputs.forEach(input => {
	input.addEventListener("focus", function (){
		let parent = this.parentNode.parentNode;
		parent.classList.add("focus");
	});
	
	input.addEventListener("blur", function (){
		let parent = this.parentNode.parentNode;
		if(this.value == ""){
			parent.classList.remove("focus");
		}
	});
});


// ketika signup memilih admin, otomatis menampilkan form password admin
const admin = document.querySelector(".admin");

admin.addEventListener("blur", function (){
	let input_apass = document.querySelector("#input_apass")
	if(this.value == "admin"){
		input_apass.classList.add("input-div");
        input_apass.classList.remove("input-hide");
	}
	else if(this.value == "user"){
        input_apass.classList.add("input-hide");
		input_apass.classList.remove("input-div");
	}
	else{
        input_apass.classList.add("input-hide");
		input_apass.classList.remove("input-div");
	}
});


// fungsi memilih element
const selectElement = function(element){
    return document.querySelector(element);
}

// login dan signup
let container = selectElement(".container");
let wrapper = selectElement(".wrapper");
let signup = selectElement(".btn-signup");
let login = selectElement(".btn-login")

signup.addEventListener("click", function(){
    container.classList.add("active");
    wrapper.classList.add("active");
});

login.addEventListener("click", function(){
    container.classList.remove("active");
    wrapper.classList.remove("active");
});