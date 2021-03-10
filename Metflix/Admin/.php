<?php
    include('header.php');
?>
<html>

<head>
    <title>Movies</title>
</head>

<body>
    <div class="iniDiv lightgray">
        <div class="shapeTable ">
            <form id="search_movie_form">
                <div class="row">
                    <div class="col">
                        <div class="movieSearchSelect">
                            <label for="movies">Movie: </label>
                            <select id="movies">
                                <option value="1" selected>Movie Name</option>
                                <option value="2">Type</option>
                                <option value="3">Actor</option>
                                <option value="4">Direction</option>
                                <option value="5">Studio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <input type="text" placeholder="Search.." name="searchInput" id="searchInput">
                            <button type="button" id="search_button" onclick="searchClick()"><i class="fa fa-search"></i></button>
                            <a href="edit2page.php"><button type="button" style="margin-top:3px;">เพิ่มข้อมูล</button></a>
                        </div>
                    </div>
                </div>
            </form>
            <div id="list-data" style="margin-top: 10px;">

            </div>
        </div>

        <div class="modal" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="loader"></div>
                </div>
            </div>

        </div>


        <script type="text/javascript">
        function editForm(Movie_Name) {
            var form = $(document.createElement('form'));
            $(form).attr("action", "editpage.php");
            $(form).attr("method", "POST");
            $(form).css("display", "none");

            var input_employee_name = $("<input>")
                .attr("type", "text")
                .attr("name", "Movie_Name")
                .val(Movie_Name);
            $(form).append($(input_employee_name));

            form.appendTo(document.body);
            $(form).submit();
        }

        function deleteClick(Moive_name) {
            $.ajax({
                url: "deleteMovie.php",
                type: "POST",
                data: {
                    delete_name: Moive_name
                },
                beforeSend: function() {
                    $('#loadMe').modal('show');
                },
                complete: function() {
                    $('#loadMe').modal('hide');
                },
                success: function(data) {
                    alert('delete success');
                    searchClick();
                }
            });
        }
        function addClick(){
            $.ajax({
                url: "addpage.php",
                type: "POST",
                data: {
                    Movie_name: $("#Movie-name").val(),
                    Type: $("#Type").val(),
                    Actor: $("#Actor").val(),
                    Diraction: $("#Diraction").val(),
                    Studio: $("#Studio").val(),
                    Time: $("#Time").val(),
                    Short_Story: $("#Short_Story").val()
                },
                beforeSend: function() {
                    $('#loadMe').modal('show');
                    alert('Add not success');
                },
                complete: function() {
                    $('#loadMe').modal('hide');
                    alert('Add not success');
                },
                success: function(data) {
                    alert('Add success');
                }
            })
        }
        function searchClick() {
            $.ajax({
                url: "query_movies.php",
                type: "POST",
                data: {
                    movies: $("#movies").val(),
                    searchInput: $("#searchInput").val()
                },
                beforeSend: function() {
                    $('#loadMe').modal('show');
                },
                complete: function() {
                    $('#loadMe').modal('hide');
                },
                success: function(data) {
                    $("#list-data").html(data);
                }
            });
        };
        $(window).on('load', function() {
            $.ajax({
                url: "query_movies.php",
                type: "POST",
                data: {
                    movies: 0,
                    searchInput: ''
                },
                beforeSend: function() {
                    $('#loadMe').modal('show');
                },
                complete: function() {
                    $('#loadMe').modal('hide');
                },
                success: function(data) {
                    $("#list-data").html(data);
                }
            });
        });

        </script>
</body>

</html>