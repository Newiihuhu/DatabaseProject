<?php
    include('condb.php');
    include('header.php');
    session_start();
    $ID = $_SESSION['ID'];
        $sql="select u.Name,p.Username,u.Email,u.Password,p.Picture
        from users u inner join profile p on u.ID = p.ID where u.ID = '".$ID."'";
        $query = mysqli_query($con,$sql);
        $result = mysqli_fetch_array($query);
        //echo $result["Picture"];
?>
<html>

<head>
    <title>Editprofile</title>
</head>

<body>
    <div class="iniDiv">
        <div class="boxeditProfile">
            <div class="row profileeditrow">
                <img src="img/<?php echo $_SESSION["Picture"];?>" alt="avatarTest Picture" class="imgAvatar imgProfile">
                <div class="buttoneditpic">
                    <a onclick="edit()"><label class="textEditpic">edit</label></a>
                </div>
                <dialog id="choosefile" class="boxchoosefile"><input type="file" id="myFile">
                    <div style="margin-left:45px;">
                        <button type="button" onclick="saveClick()" style="margin-top:3px;">save</button>
                        <a href="editprofileAdmin.php"><button type="button" style="margin-top:3px;">cancel</button></a>
                    </div>

                </dialog>
            </div>
            <div class="row ">
                <div class="col colprofileAdmin">
                    <form>
                        <label>Name </label>
                        <input type="text" id="Name"
                            style="margin-top: 50px;margin-left: 35px;border-radius: 25px;text-align: center;"
                            value="<?php echo $result['Name'] ?>">
                    </form>
                </div>

            </div>
            <div class="row ">
                <div class="col colprofileAdmin">
                    <form>
                        <label>Username </label>
                        <input type="text" id="Username"
                            style="margin-left: 7px;border-radius: 25px;text-align: center;"
                            value="<?php echo $result['Username'] ?>">
                    </form>
                </div>

            </div>
            <div class="row ">
                <div class="col colprofileAdmin">
                    <form>
                        <label>Email </label>
                        <input type="text" id="Email" style="margin-left: 40px;border-radius: 25px;text-align: center;"
                            value="<?php echo $result['Email'] ?>">
                    </form>
                </div>

            </div>
            <div class="row ">
                <div class="col colprofileAdmin">
                    <form>
                        <label>Password </label>
                        <input type="text" id="Password"
                            style="margin-left: 13px;border-radius: 25px;text-align: center;"
                            value="<?php echo $result['Password'] ?>">
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col" style="margin-left: 40%">
                    <button type="button" onclick="save0Click()" style="margin-top:3px;">save</button>
                    <a href="homepageAdmin.php"><button type="button" style="margin-top:3px;">cancel</button></a>
                </div>

            </div>

        </div>

    </div>

    <script>
    function edit() {
        var x = document.getElementById("choosefile");
        x.open = true;
    }

    function saveClick() {
        $.ajax({
            url: "save2page.php",
            type: "POST",
            data: {
                Picture: $("#myFile").val()
            },
            beforeSend: function() {
                $('#loadMe').modal('show');
            },
            complete: function() {
                $('#loadMe').modal('hide');
            },
            success: function(data) {
                alert('save success');
                window.location = "editprofileAdmin.php";
            }
        })
    }

    function save0Click() {
        $.ajax({
            url: "saveinfoProfile.php",
            type: "POST",
            data: {
                Name: $("#Name").val(),
                Username: $("#Username").val(),
                Email: $("#Email").val(),
                Password: $("#Password").val()
            },
            beforeSend: function() {
                $('#loadMe').modal('show');
            },
            complete: function() {
                $('#loadMe').modal('hide');
            },
            success: function(data) {
                alert('save success');
                window.location = "editprofileAdmin.php";
            }
        })
    }
    </script>

</body>

</html>