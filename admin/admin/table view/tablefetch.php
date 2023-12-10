<?php
//fetch.php
session_start();

if(isset($_SESSION['Auid'])!=NULL){
    $connect = mysqli_connect("localhost", "root", "", "srm");
$columns = array('sid', 'name','email','mobile','department','semester');
$query = "SELECT * FROM users ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE sid LIKE "%'.$_POST["search"]["value"].'%" 
 OR names LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY sid DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))


{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="reg_number">AP'. $row["sid"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="names">' . $row["names"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="mobile">' . $row["mobile"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="department">' . $row["department"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["sid"].'" data-column="semester">' . $row["semester"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["sid"].'">Delete</button>';
 $data[] = $sub_array;
}
//echo 'fanjsandlndnasdjlnladljlkajjklaj'.$row["sid"]; 

function get_all_data($connect)
{
 $query = "SELECT * FROM users";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);
}

//echo 'fanjsandlndnasdjlnladljlkajjklaj'.$row["sid"]; 

?>