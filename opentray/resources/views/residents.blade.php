<!DOCTYPE html>
<html>

<head>
    <title>Residents</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/residents.css') }}" rel="stylesheet">
    <!--<script type="text/javascript" src="{{ asset('cjs/dietary.js') }}"></script>-->
</head>

<script>
    function resident(fname, lname, room, likes, dislikes, allergies, id, facillity) {
        this.fname = fname;
        this.lname = lname;
        this.room = room;
        this.likes = likes;
        this.dislikes = dislikes;
        this.allergies = allergies;
        this.id = id;
        this.facillity = facillity;
    }
    residents = [];
    <?php
    $residents = DB::table('residents')->where('active', 1)->orderby('lname')->get();
    foreach ($residents as $key => $value) {
        echo 'residents.push(new resident(';
        echo '"' . $residents[$key]->fname . '", ';
        echo '"' . $residents[$key]->lname . '", ';
        echo '"' . $residents[$key]->room . '", ';
        echo '"' . $residents[$key]->likes . '", ';
        echo '"' . $residents[$key]->dislikes . '", ';
        echo '"' . $residents[$key]->allergies . '", ';
        echo '"' . $residents[$key]->id . '", ';
        echo '"' . $residents[$key]->facility . '"';
        echo '));';
        echo "\n";
    }
    ?>
</script>

<body>
    <div id="mainContainer">
        <div id="header">
            <p class="header_button">Login</p>
        </div>
        <div id="main_window">
            <div id="container">
                <select id="resident_search" size="22" onchange='loadInfo()'>
                    <?php
                    foreach ($residents as $key => $value) {
                        echo '<option>';
                        echo $residents[$key]->lname;
                        echo ', ';
                        echo $residents[$key]->fname;
                        echo "</option>\n";
                    }
                    ?>
                </select>
            </div>
            <div id="container">
                <form id="resident_info" action="UpdateResident" method="get">
                    <label>First Name</label>
                    <input id="first_name">
                    <label>Last Name</label>
                    <input id="last_name">
                    <label>Room</label>
                    <input id="room">
                    <label>Likes</label>
                    <input id="likes">
                    <label>Dislikes</label>
                    <input id="dislikes">
                    <label>Allergies</label>
                    <input id="allergies">
                    <input type="submit" name="updateResident" value="Submit">
                    <input type="reset" name="reset" onclick='resetSelection()'>
                </form>
            </div>
        </div>
    </div>

</body>

<script>
    function loadInfo() {
        index = document.getElementById("resident_search").selectedIndex;
        document.getElementById("first_name").value = residents[index].fname;
        document.getElementById("last_name").value = residents[index].lname;
        document.getElementById("room").value = residents[index].room;
        document.getElementById("likes").value = residents[index].likes.replace("|", ",");
        document.getElementById("dislikes").value = residents[index].dislikes.replace("|", ",");
        document.getElementById("allergies").value = residents[index].allergies.replace("|", ",");
    }

    function resetSelection() {
        document.getElementById("resident_search").selectedIndex = -1;
    }
</script>

</html>