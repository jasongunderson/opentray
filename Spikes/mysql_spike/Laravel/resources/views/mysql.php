<html>
<?php
$results = DB::table('people')->select('*')->get();
foreach ($results as $key => $value) {
    echo $results[$key]->fname;
    echo ' ';
    echo $results[$key]->lname;
    echo '<br>';
}
?>

</html>