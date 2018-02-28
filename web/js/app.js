 if ($('#btn-add-producto').length > 0) {

    
    $('#btn-add-producto').on('click', function() {

    	 $('#lastRow').append('<tr>'+
    	 	                     '<td>'+
    	 	                        '<select></select>'+
    	 	                      '</td>'+
    	 	                     '<td>'+
    	 	                        '<input type="text" class="form-control"/>'+
    	 	                      '</td>'+
    	 	                      '</tr>');    	 	                      


    });


 }