<form action="xip.php" method="post" enctype="multipart/form-data">
	xup: <input type="file" name="photo" size="25" />
	<input type="submit" name="submit" value="Submit" />
</form>
<?php
$log_directory = 'xfiles/';

$results_array = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                }
                closedir($handle);
        }
}

//Output findings
foreach($results_array as $value)
{
    echo $value . '<br />';
}
?>
