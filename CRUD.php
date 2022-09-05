
$table = 'test';
$insert_sql = "INSERT INTO $table (col1, col2) VALUES ('val1', 'val2')";

$select_sql = "SELECT * FROM $table WHERE col1 = 'val1' AND col2 = 'val2'";

$update_sql = "UPDATE $table SET col1 = 'val1', col2 = 'val2' WHERE col3 = 'val1'";

$delete_sql = "DELETE FROM $table WHERE col1 = 'val1'";