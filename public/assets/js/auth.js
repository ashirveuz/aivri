$(document).ready(function () {
    checkOtpStatus();
});

const toggleOtpSection = (action) => {
    event.preventDefault();
    $("#auth_method").val(action);
    if (action == "otp") {
        $("#passwordSection").hide();
        $("#otpSection").show();
        $("#otpEnableBtn").hide();
        $("#passwordEnableBtn").show();
    } else {
        $("#otpSection").hide();
        $("#passwordSection").show();
        $("#passwordEnableBtn").hide();
        $("#otpEnableBtn").show();
    }
};

const moveOtpFieldFocus = (event, currentInput) => {
    const keyPressed = event.key;

    if (keyPressed.match(/[0-9]/)) {
        setTimeout(() => {
            const nextInput = currentInput.nextElementSibling;
            if (nextInput) {
                nextInput.focus();
            }
        }, 0);
    }

    if (keyPressed === "Backspace" && !currentInput.value) {
        setTimeout(() => {
            const previousInput = currentInput.previousElementSibling;
            if (previousInput) {
                previousInput.focus();
            }
        }, 0);
    }
};

const validateNumberAndSendOtp = (element) => {
    event.preventDefault();
    let mobileNumber = $("#mobile").val();
    if (!mobileNumber) {
        showValidationMessage(
            "mobileErrorSec",
            "The mobile field is required.",
            false
        );
        return;
    }
    sentOtp(mobileNumber, element);
};

const sentOtp = (mobileNumber, element = null) => {
    if (element) {
        button = $(element).html();
        $(element)
            .attr("disabled", true)
            .html('<i class="fa fa-spinner fa-spin"></i> Sending...');
    }

    $.ajax({
        url: "/send-otp",
        type: "POST",
        data: {
            mobile: mobileNumber,
            _token: csrfToken,
        },
        success: function (response) {
            $("#otpBtnDiv").hide();
            $("#otpFieldDiv").show();

            if (element) {
                $(element).attr("disabled", false).html(button);
            }
        },
        error: function (xhr, status, error) {
            showValidationMessage(
                "mobileErrorSec",
                xhr.responseJSON.message,
                false
            );
            if (element) {
                $(element).attr("disabled", false).html(button);
            }
        },
    });
};

const showValidationMessage = (elementId, message, status = false) => {
    $("#" + elementId)
        .html(message)
        .show();
    setTimeout(() => {
        $("#" + elementId)
            .html("")
            .hide();
    }, 3000);
};

const checkOtpStatus = () => {
    let mobileNumber = $("#mobile").val();
    if (mobileNumber) {
        $.ajax({
            url: "/check-otp-status",
            type: "POST",
            data: {
                mobile: mobileNumber,
                _token: csrfToken,
            },
            success: function (response) {
                $("#otpBtnDiv").hide();
                $("#otpFieldDiv").show();
            },
        });
    }
};
