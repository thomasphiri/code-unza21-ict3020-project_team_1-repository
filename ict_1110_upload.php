<?php

if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        if (in_array($ext, $allowed))
        {
          
            $sql = 'select max(id) as id from ict_3020';
            $result = mysqli_query($conn, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

         
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
           
            $sql = "INSERT INTO ict_3020(filename, created) VALUES('$filename', '$created')";
            mysqli_query($conn, $sql);
            header("Location: ict_3020.php?st=success");
        }
        else
        {
            header("Location: ict_3020.php?st=error");
        }
    }
    else
        header("Location:ict_3020.php");
}
?>