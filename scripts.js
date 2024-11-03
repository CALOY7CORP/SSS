$(document).ready(function() {
    // Fetch open tickets on page load
    $.get("fetch_tickets.php", function(data) {
        $("#open-tickets").html(data);
    });

    // Refresh open tickets every 30 seconds
    setInterval(function() {
        $.get("fetch_tickets.php", function(data) {
            $("#open-tickets").html(data);
        });
    }, 30000);
});