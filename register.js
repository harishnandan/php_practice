function validate(){
	var field1= document.getElementById("T1");
	var field3= document.getElementById("T3");
	var field4= document.getElementById("T4");
	var field5= document.getElementById("T5");
	var field6= document.getElementById("T6");
	var capital=/[A-Z]/;
	var sign='@';
	var space=' ';
	var last='.com';

		if(field4.value!=field5.value){
			document.getElementById("S5").innerHTML="Should be same as Password";
			return false;
		}
		if(field6.value.match(capital))
		{
			document.getElementById("S6").innerHTML="*E-mail can't contain capital letters";
			document.getElementById("S5").innerHTML="";
			return false;
		}
		if(field6.value.length<2 || (field6.value.indexOf("@")==(field6.value.length-3)))
		{
			document.getElementById("S6").innerHTML="*Invalid E-mail";
			document.getElementById("S5").innerHTML="";
			return false;
		}
		if(!field6.value.match(sign)){
			document.getElementById("S6").innerHTML="*E-mail should have @";
			document.getElementById("S5").innerHTML="";
			return false;
		}
		if(field6.value.match(space)){
			document.getElementById("S6").innerHTML="*E-mail shouldn't have spaces";
			document.getElementById("S5").innerHTML="";
			return false;
		}
		if(!field6.value.match(last)){
			document.getElementById("S6").innerHTML="*E-mail should have proper domain";
			document.getElementById("S5").innerHTML="";
			return false;
		}
		{
			return true;
		}

	}
