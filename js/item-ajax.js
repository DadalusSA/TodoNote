$(document).ready(function () {
    getPageData();

    /* Get Page Data*/
    function getPageData() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: url+ 'user/getuserdata.php',
        }).done(function (data) {
            manageRow(data.data);

        });
    }

    /* Add new Item table row */
    function manageRow(data) {
        var rows = '';
        var checkedverify= "checked";
        $.each(data, function (key, value) {
            var newchecked = value.Completed;
            rows = rows + '<tr>';
            rows = rows + '<td>' + value.Todo + '</td>';
            rows = rows + '<td data-id="' + value.ID + '">';
            if (newchecked == 1)
                {
                rows = rows + '<input type="checkbox" style="width:21px;height: 21px;" class="getcheck" id="' + value.Todo + '"' + checkedverify + ' />&nbsp&nbsp';
            }
            else
            {
                rows = rows + '<input type="checkbox" style="width:21px;height: 21px;" class="getcheck" id="' + value.Todo + '" />&nbsp&nbsp';
            }
            rows = rows + '<button class="btn btn-danger delete_todo" style="margin-bottom:10px">Del</button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
            function markdone(getvalue) {
                alert(getvalue);
            }
        });

        $("tbody").html(rows);
        
        
    }
    $("body").on("click", ".getcheck", function () {
        var Todo = $(this).parent("td").prev("td").text();
        var ischecked = $(this).is(":checked");
            
            if (ischecked) {
                $.ajax({
                    type: 'POST',
                    url: url +'user/markdone.php',
                    data: { Todo },
                }).done(function (getdata) {
                    alert("Added")
                });
            }
           
        if (!ischecked) {
            $.ajax({
                type: 'POST',
                url: url + 'user/markincom.php',
                data: { Todo },
            }).done(function (getdata2) {
                alert("Deleted")
            });
        }
    });
        

        /* Create Todo*/
         $(".Create_Todoclass").click(function (e) {
            e.preventDefault();
            var form_action = $("#createtodo").find("form").attr("action");
            var getTodo = $("#createtodo").find("input[name='Todo']").val();

            if (getTodo != '') {
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url + form_action,
                    data: {getTodo},
                }).done(function (getvalue3) {
                    $("#createtodo").find("input[name='Todo']").val('');
                    getPageData();
                    $(".modal").modal('hide');
                    toastr.success('Todo Created Successfully.', 'Success Alert', { timeOut: 5000 });
                });
            } else {
                alert('You are missing title or description.')
            }

        });

        /* Remove Item */
        $("body").on("click", ".delete_todo", function () {
            var id = $(this).parent("td").data('id');
            var clearline= $(this).parents("tr");
            $.ajax({
                type: 'POST',
                url: 'user/userdelete.php',
                data: { id },
            }).done(function (data) {
                clearline.remove();
                toastr.success('Todo Deleted Successfully.', 'Success Alert', { timeOut: 5000 });
                getPageData();
            });

        });

       
        });