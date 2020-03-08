/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */


/* ------------------------------------------------------------------------------
 *  # Config My Java Script
 * ---------------------------------------------------------------------------- */


var base_url = 'http://localhost/dwg/todo/';

var divStart = ` <div class="card border-left-2 border-left-dark border-right-0 border-top-0 py-1 mb-1 rounded-0 col-md-auto"><div class="form-check form-check-inline form-check">`
var divEnd = `</div></div>`

/* ------------------------------------------------------------------------------
 *  # First run document ready
 * ---------------------------------------------------------------------------- */
$(document).ready(function () {
   
    // Date picker format
    $('.daterange-single').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    // Keep last active tab
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });

    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('#tbs a[href="' + activeTab + '"]').tab('show');
    }
    getData();
});




/* ------------------------------------------------------------------------------
 *  # Fungction Event
 * ---------------------------------------------------------------------------- */

function td1() {
    $('.td1').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                getData();
            }
        });
    });
}

function td2() {
    $('.td2').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                getData();
            }
        });
    });
}
function td3() {
    $('.td3').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                getData();
            }
        });
    });
}






/* ------------------------------------------------------------------------------
 *  # Get todolist My Todos
 * ---------------------------------------------------------------------------- */

function getData() {
    $.ajax({
        url: base_url + 'getList',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            var baris = '';
            for (i = 0; i < data.length; i++) {
                baris +=
                    divStart +
                    `<label class="form-check-label"><input type="checkbox" class="change td1" data-oke="` + data[i].id_todos + `"  data-fouc></label>
                       <a href="detail?id=`+ data[i].id_todos + `"><span>` + data[i].subject_todos + ` ` + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i><i class="mi-event-available ml-1"></i> ` + data[i].due_date + `</span></a> `
                    + divEnd
            }
            baris += '<strong><a href="" class="text-dark"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#tab1').html(baris);
            $('.td1').uniform();
            $('#bg-1').html(data.length);
            td1();
        }
    })


    $.ajax({
        url: base_url + 'getDone',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var html = '';
            for (i = 0; i < data.length; i++) {
                html +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change td2" checked data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                 <a href="detail?id=`+ data[i].id_todos + `"><span class="text-success"><del>` + data[i].subject_todos + ` ` + data[i].message_todos + `</del><i class="mi-swap-horiz ml-1"></i><i class="mi-check-box ml-1"></i> <strong>Completed</strong></span></a>
                `+ divEnd
            }
            html += '<strong><a href="#" class="text-success"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';
            $('#tab2').html(html);
            $('.td2').uniform({
                wrapperClass: 'border-success-600 text-success-800'
            });
            $('#bg-2').html(data.length);
            td2();
        }
    })

    $.ajax({
        url: base_url + 'getNoResponse',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var nores = '';
            for (i = 0; i < data.length; i++) {
                nores +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change td3" data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                 <a href="detail?id=`+ data[i].id_todos + `"><span class="text-danger">` + data[i].subject_todos + ` ` + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i><i class="mi-block ml-1"></i> <strong>Noresponse Harus segera dikonfirmasi !</strong></span></a>
                `+ divEnd
            }
            nores += '<strong><a href="#" class="text-danger"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#tab3').html(nores);
            $('.td3').uniform({
                wrapperClass: 'border-danger-600 text-danger-800'
            });
            $('#bg-3').html(data.length);
            td3();

        }
    })

   
}




