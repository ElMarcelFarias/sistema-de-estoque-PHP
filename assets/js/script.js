$(function() {
    $('input[name=price], input[name=quantity], input[name=min_quantity]').mask("#.##0,00", {reverse: true});
    $('input[name=cod]').mask('#');
})