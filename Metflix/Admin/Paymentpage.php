<?php
    include('header.php');
?>
<html>

<head>
    <title>Payments</title>
	    <style>
        .fNew {
            text-align: center;
            font-family: Lato-Regular;
            margin-bottom: 5px;
        }
    	</style>
</head>

<body>
    <div class="iniDiv">
		<h1 class="fNew">Payments</h1>
        <div class="shapeTable">
            <form id="search_Payments_form">
                <div class="row">
                    <div class="col">
                        <div class="PaymentsSearchSelect">
                            <label for="Payments">Payments: </label>
                            <select id="Payments">
                                <option value="1" selected>ID</option>
                                <option value="2" >Payment ID</option>
                                <option value="3">Card Number</option>
                                <option value="4">Package</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <input type="text" placeholder="Search.." name="searchInput" id="searchInput">
                            <button type="button" id="search_button" onClick="searchClick()"><i class="fa fa-search"></i></button>
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
        function searchClick() {
            $.ajax({
                url: "query_Payment.php",
                type: "POST",
                data: {
                    Payments: $("#Payments").val(),
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
                url: "query_Payment.php",
                type: "POST",
                data: {
                    Payments: 0,
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