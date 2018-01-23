<?

include 'dbheader.php';

$TPL['controller'] = $_SERVER['PHP_SELF'];

switch ($_REQUEST['act'])
{
  case 'create':
    $query =
      "
      INSERT INTO cats
      VALUES (NULL, '{$_POST[name]}', '{$_POST[breed]}', '{$_POST[owner]}', '{$_POST[imageurl]}')
      ";
    mysqli_query($link, $query) or die ("Sorry, record was NOT inserted: " . mysqli_error($link));
    break;


  case 'update':
    $query = "UPDATE cats SET owner = 'Cat Farm' WHERE id = '{$_REQUEST[id]}';";
    mysqli_query($link, $query) or die("Update Failed: $query " . mysqli_error($link));
    break;
  
  
  case 'delete':
    $query = "DELETE FROM cats WHERE id = '{$_REQUEST[id]}';";
    mysqli_query($link, $query) or die("Delete Failed: $query " . mysqli_error($link));
  
    break;  
}

// build query
$query = "SELECT * FROM cats";

// execute the query, save reference to results
$result = mysqli_query($link, $query) or die ("Unable to execute mysql query");

// grab results of query for as long as results, store in TPL
while ($nextRow = mysqli_fetch_assoc($result)) $TPL['results'][] = $nextRow;

// close database connection
mysqli_close($link);


include 'catabase.view.php';

?>