const showAuthModal = (element) => {
    $(element).attr("disabled", true);

    if ($("#livewire-auth-container").html() === "") {
        $.ajax({
            url: "/load-auth-modal",
            method: "GET",
            success: function (response) {
                $("#livewire-auth-container").html(response);
                $("#loginModal").modal("show");
                $(element).attr("disabled", false);
            },
        });
    } else {
        $("#loginModal").modal("show");
        $(element).attr("disabled", false);
    }
};
