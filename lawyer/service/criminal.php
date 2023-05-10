<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-3">
             
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>SR NO: </th>
        <th>SECTION</th>
        <th>DESCRIPTION</th>
        <th>PUNISHMENT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>Section 302 IPC</td>
        <td>We often hear, that the court has found someone guilty of committing the offense of murder under Section 302 of the Indian Penal Code (IPC). In cases like these, the court punishes the killer with either the death penalty or life imprisonment. However, a large number of the Indian population is still unaware of what Section 302 of the IPC deals with. Here is a glimpse of Section 302:</td>
        <td>Death penalty is a legal process whereby a person is sentenced to death by the state as a punishment for a heinous crime. In India, the death penalty is given for rare cases. The criteria for a crime to be a rarest case has not been defined. According to data from Amnesty International, at least 100 people were executed (but not executed) in 2007, 40 in 2006, 77 in 2005, 23 in 2002 and 33 in 2001.</td>
      </tr>
      
    </tbody>
  </table>
</div>


---------------------------------------------------------------------------------------------------------

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>




                <div class="container mt-3 border border-primary">
             
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>SR NO: </th>
        <th>SECTION</th>
        <th>DESCRIPTION</th>
        <th>PUNISHMENT</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>01</td>
        <td>Section 302 IPC</td>
        <td>We often hear, that the court has found someone guilty of committing the offense of murder under Section 302 of the Indian Penal Code (IPC). In cases like these, the court punishes the killer with either the death penalty or life imprisonment. However, a large number of the Indian population is still unaware of what Section 302 of the IPC deals with. Here is a glimpse of Section 302:</td>
        <td>Death penalty is a legal process whereby a person is sentenced to death by the state as a punishment for a heinous crime. In India, the death penalty is given for rare cases. The criteria for a crime to be a rarest case has not been defined. According to data from Amnesty International, at least 100 people were executed (but not executed) in 2007, 40 in 2006, 77 in 2005, 23 in 2002 and 33 in 2001.</td>
      </tr>
      
    </tbody>
  </table>
</div>



<!-- yogesh search value murder table START -->

<?php 
$_REQUEST['variable']
    
    include('../db.php');
    // extract($_POST);
    $search1 =  $_GET['search'];

          if(isset($_GET['submit'])){
           $sql = "INSERT INTO `search`(`text`) VALUES ('$search1')";
            $res = mysqli_query($con, $sql);
            if($res){
              
          
              
            }
          else{
            echo"fail";
          }

}
?>