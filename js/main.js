$(document).ready(function() {
    $('#animales').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 900
    });
});
/*------tabla-------------------------------------------------------*/
$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
$(document).ready(function() {
    // Activate tooltips
    $('[data-toggle="tooltip"]').tooltip();
    // Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function() {
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if (name.search(term) < 0) {
                $row.hide();
            } else {
                $row.show();
            }
        });
    });
});
/*------------CORAZON FAV----------*/
$(function() {
    $(".heart").on("click", function() {
        $(this).toggleClass("heart-blast");
    });
});
/*----------CAMBIO PASSWORD--------*/
function validar_clave() {
    var caract_invalido = " ";
    var caract_longitud = 6;
    var cla1 = document.formpass.password.value;
    var cla2 = document.formpass.password2.value;
    if (cla1 == '' || cla2 == '') {
        alert('Debes introducir tu clave en los dos campos.');
        return false;
    }
    if (document.formpass.password.value.length < caract_longitud) {
        alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
        return false;
    }
    if (document.formpass.password.value.indexOf(caract_invalido) > -1) {
        alert("Las claves no pueden contener espacios");
        return false;
    } else {
        if (cla1 != cla2) {
            alert("Las claves introducidas no son iguales");
            return false;
        } else {
            alert('Contraeña correcta');
            return true;
        }
    }
}