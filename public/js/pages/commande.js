$(function () {
    $("#lookInfo").click(function () {
        const info = $("#info").val();
        const token = $("#csrf").val();
        const commandes = $(".commandes");
        $.post(
            "/chercherCommande",
            {
                _token: token,
                info: info,
            },
            function (data) {
                for (var element in data) {
                }
            }
        );
    });
});
