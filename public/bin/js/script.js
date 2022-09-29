$(document).ready(function () {
    var table = $('#dataTable').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
});
