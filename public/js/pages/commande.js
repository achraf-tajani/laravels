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

    $(".ongle").click(function () {
        $(".o2").toggle();
        $(".o1").toggle();
        $(".c-filter").toggle("slide");
    });
    $(".m-date").each(function () {
        this.innerHTML = moment(this.innerHTML).format("MMMM Do YYYY");
    });
});
