$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "../../Controller/datve.php",
        data: "data",
        dataType: "dataType",
        success: function () {
            $.post("../../Controller/datve.php", data,
                function (data) {
                    
                },
                "dataType"
            );
        }
    });
    $("#").click(function (e) { 
        e.preventDefault();
        $("#show_count").load("../../Controller/datve.php", "data", function (response, status, request) {
            this; // dom element
            
        });
    });
});