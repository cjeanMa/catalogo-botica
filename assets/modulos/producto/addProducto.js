
$(document).ready(function(){
    $('#categoriaProducto').change(function(){
        let idCat = $('#categoriaProducto').val();
        let data = "idCat="+idCat;
        console.log(data);
        $.ajax({
            type: "POST",
            url: "../tipo/cateoriaByTipoAjax",
            data: data,
            success: function(a){
                $('#tipoProducto').html(a);
            }
        })

    })

    function filePreview(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#imgPreview').html("<img src='"+e.target.result+"' class='imgPreview'/>");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#imagenProducto').change(function(){
        filePreview(this);
    })
})