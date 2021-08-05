$(document).ready(function () {
    $.ajax({
        url: "../server/dispatcher.php",
        type: "post",
        dataType: "json",
        data: {
            action: "getAll",
            startDate: "2021-08-04",
            endDate: "2021-08-05",
        },
        success: function (response) {
            console.log(response);
        },
        error: function (response) {
            console.log(response);
        },
    });
});
