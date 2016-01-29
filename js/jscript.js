
//Javascript page for managing settings
function addListeners(){
			if(window.addEventListener){
				//Shows the form to register a child
				document.getElementById('inscEnf').addEventListener('click',showEnfForm,false);
				document.getElementById('inscResp').addEventListener('click',load,false);
				document.getElementById('nb_enf').addEventListener('change',generateNForms,false);
				document.getElementById('signInBt').addEventListener('click',generateSignInForm,false);
				document.getElementById('signUpBt').addEventListener('click',generateSignUpForm,false);

			}else if(window.attachEvent){
				document.getElementById('').attachEvent('onclick',showEnfForm);
			}
}
//
		function histoire(){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
					}else{
						xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
					}
					xmlhttp.onreadystatechange = function(){
						if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
							document.getElementById('reader').innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open('GET',"./histoire.html",true);
					xmlhttp.send();
				}

		//Function to go to the next chapter
		function nextchapter(){
			var curchapt = document.getElementById("chaptNum").innerHTML;
			if(curchapt<10){
			 curchapt++;
			}
			//Verification
			document.getElementById("chaptNum").innerHTML= curchapt;
			document.getElementById("reader").innerHTML = curchapt;
			loadPage(curchapt);
		}

		//Function to go to the previous chapter
		function prevchapter(){
			var curchapt = document.getElementById("chaptNum").innerHTML;
			if(curchapt>0){
			 curchapt--;
			}
			 
			//Verification
			document.getElementById("chaptNum").innerHTML= curchapt;
			document.getElementById("reader").innerHTML = curchapt;
			loadPage(curchapt);
		}


		function loadPage(val){
			var file="./history/chpt"+val+".html";
			if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
			}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('reader'). innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET',file,true);
			xmlhttp.send();
		}

window.onload = addListeners;



	


