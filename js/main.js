$(document).ready(function() {
    $('#animales').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 900
    });
});
/*carousel perdidos*/
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
// var checkbox = document.getElementById('like');
// checkbox.addEventListener("change", validaCheckbox, false);

// function validaCheckbox() {
//     var checked = checkbox.checked;
//     if (checked) {
//         alert('checkbox esta seleccionado');
//     }
// }