<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cascaded Category</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>


    <header class="text-center p-4 bg-dark text-white" style="font-size: 40px;">Dependent Select Box In Laravel</header>
    <div class="container mt-4">
        <div class="row" id="main">

            <div class="col-md-4">
                <h3>Category<span class="gcolor"></span> </h3>
                <div class="form-s2">
                    <div>
                        <select class="form-control formselect required" placeholder="Select Category"
                            id="main_categories">
                            <option value="0" disabled selected>Select
                                Main Category*</option>
                            @foreach($main_categories as $category)
                            <option  value="{{ $category->id }}">
                                {{ ucfirst($category->name) }}</option>
                            @endforeach
                        </select>
                        <div class="parent_childern">

                        </div>
                    </div>
                </div>
            </div>




        </div>
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

    <script>
                $(document).ready(function () {
                    $('#main_categories').on('change' ,function () {
                        $('.parent_childern').empty();
                        let current_category_id = $('main_categories').val();
                        counter = 0;
                        recursive_sub_create();


                    })

                    function recursive_sub_create()
                    {

                        $.ajax({
                            type: 'GET',
                            url: 'GetSubCat/' + current_category_id,
                            success: function (response) {
                            var response = JSON.parse(response);
                            console.log(response);
                            $('.parent_childern').append('<div class="col-md-4" id="div_sub_'+counter+'"></div>');
                            $('#div_sub_'+counter).append('<h3>Sub Category '+counter+'</h3>');
                            $('#div_sub_'+counter).append('<select class="form-control formselect required" placeholder="Select Sub Category" id="sub_category_slecet_'+counter+'"</select>');

                            $('#sub_category_select_'+counter).empty();
                            $('#sub_category_select_'+counter).append(`<option value="0" disabled selected> Sub Category*</option>`);

                            response.forEach(element => {
                                $('#sub_category_select_'+counter).append(`<option value="${element['id']}">${element['name']}</option>`);
                                });
                            }
            });


                    }

    });
    </script>
</body>

</html>
