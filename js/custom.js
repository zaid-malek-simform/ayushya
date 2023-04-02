(function ($) {
    "use strict"; // Start of use strict
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    /*Loader Javascript
    -------------------*/
    var window_var = $(window);
    window_var.on('load', function () {
        $(".loading").fadeOut("fast");
        $("#snackbar").addClass("show");
    });

    // fullscreen function
    $(".fullscreen").on('click', function () {
        if (document.webkitCurrentFullScreenElement == null) {
            document.documentElement.webkitRequestFullScreen();
        } else {
            document.webkitCancelFullScreen();
        }
    });
    // fullscreen function End

})(jQuery);

$(".btnupd").on('click', function () {
    $.ajax({
        method: "POST",
        url: "get-staff.php",
        dataType: "json",
        data: { "data": this.id },
        success: function (data) {
            $("#updmodal").modal('show');
            $("#ustaff_name").val(data.name);
            $("#uphone").val(data.phone);
            $("#uemail").val(data.email);
            $("#id").val(data.id);
            if (data.role == 'doctor') {
                $("#ustaff_typeD").prop('checked', true);
            }
            else if (data.role == 'receptionist') {
                $("#ustaff_typeR").prop('checked', true);
            }

        },
        error: function () {
            window.alert("Failed");
        }
    });
});

$(".btnnew").on('click', function () {
    $("#newPatient").show();

});