<script type="text/javascript">
	var arr = "apple    orange banana   pear lemon peach mango";
	document.write("<pre>"+arr+"</pre>");
	arr = arrrev(arr);
	arr = wordrev(arr);
	function arrrev(arr){
		var len = arr.length;
		var newarr = '';
		for (var i = len-1 ; i >= 0 ; i-- ) {
			newarr += arr[i];
		}
		return newarr;
	}
	function wordrev($arr){
        var len = arr.length;
        var newarr = '';
        var word = '';
        for(var i = 0 ; i < len ; i++) {
        	if (arr[i] != ' ') {
        		word += arr[i];
        	} else {
        		word = arrrev(word);
        		newarr += word;
        		newarr +=' ';
        		word = '';
        	}
        	if(i == len-1) { //for the last word
        		word = arrrev(word);
        		newarr += word;
        	}   	
        }
        return newarr;
    }
	document.write("<pre>"+arr+"</pre>");
</script>