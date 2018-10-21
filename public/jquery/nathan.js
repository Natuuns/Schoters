$('.MyBtn').click(function(){ 
$(this).toggleClass('btn_added'); 
}); 

$('#submit').click(function(){ 
	var filter_cat = []; 
	$('.btn_added').each(function() { 
	var pushedVal = $(this).val(); 
	filter_cat.push(pushedVal); 
	}); 
	var selectedCat = filter_cat.join();
	console.log(selectedCat);
	document.getElementById("selectedCat").value = selectedCat;
}); 

// document.getElementById("mytext").value = "My value"; 