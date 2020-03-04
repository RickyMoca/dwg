/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */


// Get todolist Myassignment
// Begin ---------------------------------------------------------------------------------------------------------------------
function getData() {

    var url1 = 'http://localhost/dwg/todo/getList';
    var url2 = 'http://localhost/dwg/todo/changestatus';
    var type1 = 'get';
    var dataType1 = 'json';
    var type2 = 'post';

    $.ajax({
        url: url1,
        type: type1,
        dataType: dataType1,
        success: function (data) {
            var baris = '';
            for (i = 0; i < data.length; i++) {
                baris += `
                <div class="card border-left-2 border-left-dark border-right-0 border-top-0 py-1 mb-1 rounded-0 col-md-auto">
                <div class="form-check form-check-inline form-check">
                    <label class="form-check-label"><input type="checkbox" class="form-check-input-styled todo" data-oke="`+ data[i].id_todos + `"></label>
                    <span> ` + data[i].subject_todos + ` </span>
                    <span class="badge badge-flat mx-1 bg-warning">Due Date : ` + data[i].date_created + `</span>
                </div>
            </div>`
            }
            console.log(data);
            $('#tab1').html(baris);
            $('#bg-1').html(data.lenght);
            $('.todo').on('click', function () {

                const myid = $(this).data('oke');
                $.ajax({
                    url: url2,
                    type: type2,
                    data: {
                        ids: myid,
                    },
                    success: function () {
                        getData();
                        getDataCompleted();
                    }
                });
            });

        }
    })
}
// End ---------------------------------------------------------------------------------------------------------------------

// Get todolist Completed Done Myassignment
// Begin ---------------------------------------------------------------------------------------------------------------------
function getDataCompleted() {
    $.ajax({
        url: 'http://localhost/dwg/todo/getDone',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var html = '';
            for (i = 0; i < data.length; i++) {
                html += `
                <div class="card border-left-2 border-left-dark border-right-0 border-top-0 py-1 mb-1 rounded-0 col-md-auto">
                    <div class="form-check form-check-inline form-check">
                        <label class="form-check-label"><input type="checkbox" class="form-check-input-styled completed" data-oke="`+ data[i].id_todos + `"></label>
                        <span> <del>` + data[i].subject_todos + `</del> </span>
                        <span class="badge badge-flat mx-1 bg-warning">Due Date : ` + data[i].date_created + `</span>
                    </div>
                </div>`
            }

            $('#tab2').html(html);
            $('.completed').on('click', function () {

                const myid = $(this).data('oke');
                $.ajax({
                    url: 'http://localhost/dwg/todo/changestatus',
                    type: 'post',
                    data: {
                        ids: myid,
                    },
                    success: function () {
                        getDataCompleted();
                        getData();
                        addclass: 'form-check-input-styled';

                    }
                });
            });

        }
    })
}
// End ---------------------------------------------------------------------------------------------------------------------