function add1() {
    p1.qty.value = parseInt(p1.qty.value)+1;
}
function subtract1() {
    var numb = parseInt(p1.qty.value);
    if (numb<=1){
        p1.qty.value=1;
    }else{
        p1.qty.value=numb-1;
    }
}        
function confirm(){
	if ($_POST["qty"]>=1){
		document.getElementById("p1").submit();
	}
}