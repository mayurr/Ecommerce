function submitLogin() {
	var userId = document.getElementById("userId").value;
	var password = document.getElementById("password").value;
	$.ajax({
		url:'Controller/controller.login.php',
		data:{id:userId,password:password,action:"Check"},
		type:'post',
		success:function(data){
			if (data === "1") {
				alert("Login Successful");
			}
			else{
				alert("Login Unsuccessful");
			}
		}
	});
	
}