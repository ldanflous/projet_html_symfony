function renderResult(score) {

    var cores = 4;
    var timeToCrack = score.calculateAverageTimeToCrack(score.cache.entropy, cores);
    console.log(timeToCrack.toFixed(10));
    $("#registration_averageTimeToCrack").val(timeToCrack.toFixed(10));
    console.log(timeToCrack);
    var unit = 'seconds';

    if (timeToCrack > 60) {
        timeToCrack /= 60;
        unit = 'minutes';

        if (timeToCrack > 60) {
            timeToCrack /= 60;
            unit = 'hours';

            if (timeToCrack > 24) {
                timeToCrack /= 24;
                unit = 'days';

                if (timeToCrack > 365) {
                    timeToCrack /= 365;
                    unit = 'years';
                }
            }
        }
    }
    console.log('Cracked on average within ' + timeToCrack.toFixed(2) + ' ' + unit + ' using ' + cores + ' parallel cores ...');

}

$(document).ready(function () {
    $("#registration_password").on("keyup", function () {
        checkPassword($(this).val());
    });
    var inputLogin = $("#registration_login");
    var date = new Date();
    var login = date.getFullYear().toString() + (date.getMonth() + 1).toString() + date.getDate().toString() + date.getTime().toString();
    inputLogin.val(login);
    inputLogin.attr("readonly", "readonly");

    function checkPassword(password) {
        var strength = 0;
        if (password.match(/[a-z]+/)) {
            strength++;
        }
        if (password.match(/[A-Z]+/)) {
            strength++;
        }
        if (password.match(/[0-9]+/)) {
            strength++;
        }
        if (password.match(/[^ \w]+/)) {
            strength++;
        }
        if (password.length > 8) {
            strength++;
        }
        var progBar = $("#prog");
        var emoji = $("#emoji");
        var mesure = $("#mesure");
        switch (strength) {
            case 0:
                mesure.css({'display': 'none'});
                emoji.attr('src', '');
                progBar.css({'width': '0%'});
                break;
            case 1:
                mesure.css({'display': 'block', 'color': '#ff1e00'});
                mesure.text("Too bad");
                emoji.attr('src', '/img/emoji1.png');
                progBar.css({'width': '20%', 'backgroundColor': '#ff1e00'});
                break;
            case 2:
                mesure.css({'display': 'block', 'color': '#ffab00'});
                mesure.text("Not good enough");
                emoji.attr('src', '/img/emoji2.png');
                progBar.css({'width': '40%', 'backgroundColor': '#ffab00'});
                break;
            case 3:
                mesure.css({'display': 'block', 'color': '#ffab00'});
                mesure.text("Quite good");
                emoji.attr('src', '/img/emoji3.png');
                progBar.css({'width': '60%', 'backgroundColor': '#ffab00'});
                break;
            case 4:
                mesure.css({'display': 'block', 'color': '#0aa308'});
                mesure.text("Good but can still be better");
                emoji.attr('src', '/img/emoji4.png');
                progBar.css({'width': '80%', 'backgroundColor': '#0aa308'});
                break;
            case 5:
                mesure.css({'display': 'block', 'color': '#0aa308'});
                mesure.text("Excellent");
                emoji.attr('src', '/img/emoji5.png');
                progBar.css({'width': '100%', 'backgroundColor': '#0aa308'});
                break;
        }
        var score = new Score(password);
        var entropy = score.calculateEntropyScore();
        $("#registration_score").val(entropy);
        renderResult(score);
    }
});