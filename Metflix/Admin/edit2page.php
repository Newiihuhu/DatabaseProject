<?php
    include('header.php');
    include('connectDB.php');
?>
<html>

<head>
    <title>Edit2page</title>

    </style>
</head>

<body>
    <div class="iniDiv editBG">
        <div class="edittable1">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder;color:#063146;">Movie name</label>
                        <input type="text" id="Movie_name" style="width: 30%; height: 100%; border:none; text-align: center;  border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable2">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder; color:#063146;">Type</label>
                        <input type="text" id="Type" style="width: 30%; height: 100%; border:none; text-align: center;margin-left: 28px; border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable3">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder;color:#063146;">Actor</label>
                        <input type="text" id="Actor" style="width: 50%; height: 100%; border:none; text-align: center; margin-left: 23px;border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable4">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder;color:#063146;">Diractor</label>
                        <input type="text" id="Diraction" style="width: 30%; height: 100%; border:none; text-align: center; margin-left: 3px;border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable5">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder;color:#063146;">Studio</label>
                        <input type="text" id="Studio" style="width: 30%; height: 100%; border:none; text-align: center; margin-left: 16px;border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable6">
            <div class="row movieeditrow">
                <div class="col">
                    <form>
                        <label style="font-weight:bolder;color:#063146;">Time</label>
                        <input type="text"  id="Time" style="width: 20%; height: 100%; border:none; text-align: center; margin-left: 27px;border-radius: 10px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="edittable7">
            <div class="row movieeditrow">
                <div class="col">
                    <label style="font-weight:bolder;color:#063146;margin-right: 59px;">Short Story</label>

                </div>
                <div class="col-85">
                    <textarea placeholder="short story.." id="Short_Story"  style=" width: 90%;height:50px;border:none;text-align: center;margin-left: 84px;border-radius: 10px;"></textarea>
                </div>
            </div>
        </div>
        <div class="edittable8">
            <div class="row movieeditrow">
                <div class="col">
                    <button type="button" onclick="addClick()" style="margin-top:3px;" >add</button>
                    <a href="moviepage.php" id="moviepage"><button type="button" style="margin-top:3px;">cancel</button></a>
                </div>

            </div>
        </div>
        <script type="text/javascript">
        function addClick(){
            $.ajax({
                url: "addpage.php",
                type: "POST",
                data: {
                    Movie_name: $("#Movie_name").val(),
                    Type: $("#Type").val(),
                    Actor: $("#Actor").val(),
                    Diraction: $("#Diraction").val(),
                    Studio: $("#Studio").val(),
                    Time: $("#Time").val(),
                    Short_Story: $("#Short_Story").val()
                },
                beforeSend: function() {
                    $('#loadMe').modal('show');
                },
                complete: function() {
                    $('#loadMe').modal('hide');
                },
                success: function(data) {
                    alert('Add success');
                    window.location = "moviepage.php";
                }
            })
        }
        </script>
    </div>
</body>

</html>