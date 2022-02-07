    /* global $*/
$(function(){
    'use-strict';

    var t = $('#topic').DataTable( {
        "language": {
            "lengthMenu": "Display _MENU_ ",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing _START_ to _END_ of _TOTAL_ Topics",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
        } );
    t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
    } ).draw();

    var t = $('#OrgCommitte').DataTable( {
        "language": {
            "lengthMenu": "Display _MENU_ ",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing _START_ to _END_ of _TOTAL_ Organizations",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
        } );
    t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
    } ).draw();

    var t = $('#SteCommitte').DataTable( {
        "language": {
            "lengthMenu": "Display _MENU_ ",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing _START_ to _END_ of _TOTAL_ Steering",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
        } );
    t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
    } ).draw();


// active link
    var url = window.location.pathname, 
    urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $('#sidebar .nav-link').each(function(){
        // and test its normalized href against the url pathname regexp
        if(urlRegExp.test(this.href.replace(/\/$/,''))){
            $(this).addClass('active');       }
    });




    

});