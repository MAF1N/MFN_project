function CheckName(){
	var p=document.getElementsByTagName('p')[0];
	var username =document.getElementsByName("username")[0];	
	if (username.value==""){
		username.focus();
		p.innerHTML="Empty username input";
				p.style.visibility="visible";
		return true;
	}
    if (username.value.length<5){
    			username.focus();
    	    	p.innerHTML="Username is too short";
				p.style.visibility="visible";
    	    	return true;
    }
    	p.style.visibility="hidden";
    return false;
}
function CheckEmail(){
	var p=document.getElementsByTagName('p')[0];
	var email=document.getElementsByName("email")[0];
   	if (email.value==""||email.value.length==0)
    {
    	p.innerHTML="Email input is empty";
    	email.focus();
				p.style.visibility="visible";
    	return true;
    }
	for (var i=0; i<email.length; i++)
    	if(email[i]==" "){
    					email.focus();
    		    		p.innerHTML="Email can`t have any spaces";
						p.style.visibility="visible";
    		    		return true;
    	}
    		p.style.visibility="hidden";
    }
function CheckPasswords(){
	var p=document.getElementsByTagName('p')[0];
	var pass1=document.getElementById("ps").value;	
	var rps=document.getElementById("rps").value;
	if (pass1.length<rps.length|| pass1.length>rps.length){
		p.innerHTML="Passwords have different length";
		p.style.visibility="visible";
		return true;
	}
	else
		for (var i=0; i<pass1.length; i++)
			if (pass1[i]!=rps[i]){
				p.innerHTML="Passwords are not the same";
				p.style.visibility="visible";
				return true;
			}
			document.getElementById('subButton').disabled=false;
	p.style.visibility="hidden";
	return false;
		}
function Checker(){
	if (CheckName()){
		document.getElementById("subButton").disabled=true;
		return ;
	}
	else if (CheckEmail()){
		document.getElementById('subButton').disabled=true;
		return;
	}
	else if (CheckPasswords()){
		document.getElementById("subButton").disabled=true;
		return;
	}
	else {
		document.getElementById("subButton").disabled=false;
		return;
		}	
}	