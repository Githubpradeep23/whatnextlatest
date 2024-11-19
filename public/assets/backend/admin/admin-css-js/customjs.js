// const { round } = require("lodash");

// Start Service Charges Status Route
$(document).ready(function () {
    $(".ServiceStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.serviceStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    console.log(data);
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                },
                error: function () {
                    alert("Error");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.serviceStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    console.log(resp);
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// End Service Charges Status Route

// Start Appoinment Charges Status Route
$(document).ready(function () {
    $(".AppointmentChangeStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true ) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.appointmentStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error + 111");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.appointmentStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error + 0");
                },
            });
        }
    });
});
// End Appoinment Charges Status Route

// Start Gallary Charges Status Route
$(document).ready(function () {
    $(".GallaryStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.galleryStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.galleryStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// End Gallary Charges Status Route

// Start Testimonial Charges Status Route
$(document).ready(function () {
    $(".testimonialStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.testimonialStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.testimonialStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// End Testimonial Charges Status Route

// Start Banner Charges Status Route
$(document).ready(function () {
    $(".BannerStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.bannerStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.bannerStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// End Banner Charges Status Route

// Start Blogs Charges Status Route
$(document).ready(function () {
    $(".BlogStatus").change(function () {
        var id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.blogStatus,
                data: {
                    status: "0",
                    id: id,
                },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        } else {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "post",
                url: config.routes.blogStatus,
                data: {
                    status: "1",
                    id: id,
                },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut("slow");
                    }, 2000);
                    location.reload();
                },
                error: function () {
                    alert("Error");
                },
            });
        }
    });
});
// End Blogs Charges Status Route