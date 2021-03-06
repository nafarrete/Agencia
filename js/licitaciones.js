var campos = 0;
$(function() {
    $( "#fin2" ).datepicker({ 
        altField: '#fin',
        altFormat: 'yy-mm-dd',
        dateFormat: 'dd-mm-yy'
    });
              
    $("#formAlter").submit(function(e){
        e.preventDefault();
    });
    $("#formNueva").submit(function(e){
        e.preventDefault();
    });
    $("#btn_agregar_campos").click(function(e){
        e.preventDefault();
        //falta agregar validacion para que no ingrese el mismo campoNombre 2 veces
        var campoNombre = prompt("Ingrese algun detalle especifico", "Ejemplo: Color");
        if( campoNombre != null){
	        campos++;
	        $("#campos").attr("value", campos);
	        $("#tablaAlter").attr("style", "display: ;");
	        var d = "<tr><td>" + campoNombre + "</td><td><input type=\"text\" name=\"campovalor" + campos + "\" /><input type=\"hidden\" name=\"camponombre" + campos + "\" value=\"" + campoNombre + "\" /></tr></tr>";
	        $("#tablaAlter").append(d);
        }
    });
    $("#btn_enviar").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#formNueva").attr("action"),
            type: "POST",
            data: $("#formNueva").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else
                    $.ajax({
                        url: $("#formAlter").attr("action") + data,
                        type: "POST",
                        data: $("#formAlter").serialize(),
                        success: function(){
                            alert("Ha sido creada la licitación");
                            $("#content").load("index.php/cliente");
                        }
                    });
            }
        });
    });
    $("#btn_ofertar_licitacion").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#formOfertarLicitacion").attr("action"),
            type: "POST",
            data: $("#formOfertarLicitacion").serialize(),
            success: function(data){
                    alert("Oferta Realizada");
                    $("#content").load("index.php/proveedor");
            }
        });
    });
    // Comentarios
    // form para crear comentario
    $("#formNuevaComentario").submit(function(e){
        e.preventDefault();
    });
    // mostrar textarea para responder comentario a alguien
    $('#btn_responder_a').click(function() {
		$("#responder_a_form").show('slow');
	});
    // boton para guardar comentario
    $("#btn_publicar_comentario").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#formNuevaComentario").attr("action"),
            type: "POST",
            data: $("#formNuevaComentario").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else{           
                     alert("El comentario ha sido publicado");
                     $("#content").load("index.php/cliente");
                    }
            }
        });
    });
    //licitante (proveedor)
    $("#btn_ofertar_licitacion_comentario").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#formOfertarLicitacion").attr("action"),
            type: "POST",
            data: $("#formOfertarLicitacion").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else{           
                     alert("La oferta ha sido guardada");
                     $("#content").load("index.php/proveedor");
                    }
            }
        });
    });
    //mostrar opcion subir imagen
    $("#mostrar_subir_img").submit(function(e){
        $("#responder_a_form").show('slow');
    });
    ///////////////////////////////////////////////////////////
    // Buscar
    $("#form_buscar_licitacion").submit(function(e){
        e.preventDefault();
    });
    $("#btn_buscar_licitacion").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#form_buscar_licitacion").attr("action"),
            type: "POST",
            data: $("#form_buscar_licitacion").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else{           
                     
                     $("#content").load("index.php/proveedor/pagina_buscar_licitacion");
                    }
            }
        });
    });
    $("#form_buscar_producto").submit(function(e){
        e.preventDefault();
    });
    $("#btn_buscar_producto").click(function(e){
        e.preventDefault();
        $.ajax({
            url: $("#form_buscar_producto").attr("action"),
            type: "POST",
            data: $("#form_buscar_producto").serialize(),
            success: function(data){
                if (data == 0)
                    alert("error");
                else{           
                     
                     $("#content").load("index.php/cliente/pagina_buscar_producto");
                    }
            }
        });
    });
});
