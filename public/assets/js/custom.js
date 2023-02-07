$(document).on("click", ".btn-edit-custom", function (e) {
    e.preventDefault();

    let dataTarget = $(this).attr("data-target");
    $(this).hide();
    $("form#" + dataTarget + " :input").each(function () {
        $(this).attr("readonly", false);
        $(this).attr("disabled", false);

    });

    $("#btn-save-" + dataTarget).show();
});