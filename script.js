$(document).ready(function() {

    $("#table2").html(function(_, html) {
        return html.replace(/([1])/g, '<span class="red">$1</span>');
    });
    $("#table2").html(function(_, html) {
        return html.replace(/([2])/g, '<span class="green">$1</span>');
    });
    $("#table2").html(function(_, html) {
        return html.replace(/([3])/g, '<span class="yellow">$1</span>');
    });
    $("#table2").html(function(_, html) {
        return html.replace(/([4])/g, '<span class="blue">$1</span>');
    });

});