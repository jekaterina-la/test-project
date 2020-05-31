$(function() {
    $(".js-delete-row").on("click", function() {
        const id = $(this).attr("data-id");

        $.ajax({
            method: "GET",
            url: "delete.php?id=" + id + "&redirect=false"
        }).then(function() {
            window.location = "list.php"
        })
    })
})

