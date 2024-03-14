<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>

  <!-- Include JavaScript libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>

  <!-- Embed your JavaScript code -->
  <script>
    function generatePDF() {
      const element = document.getElementById('dash-table');

      // Clone the table to exclude the "Action" column
      const clonedTable = element.cloneNode(true);
      const actionColumnIndex = 7; // Change this index based on your table structure

      // Iterate through each row and remove the "Action" column
      clonedTable.querySelectorAll('tr').forEach(row => {
        const cells = row.querySelectorAll('td, th');
        if (cells.length > actionColumnIndex) {
          cells[actionColumnIndex].remove();
        }
      });

      // Customize the appearance of the generated PDF
      const pdfOptions = {
        margin: 10, // Adjust the margin as needed
        x: 10, // X-position of the table in the PDF
        y: 10, // Y-position of the table in the PDF
      };

      // Generate PDF from the cloned table with customized options
      html2pdf(clonedTable, pdfOptions);
    }

    function sortTableByDay() {
      const table = document.getElementById('dash-table');
      const tbody = table.querySelector('tbody');

      // Get all rows from the table
      const rows = Array.from(tbody.querySelectorAll('tr'));

      // Sort the rows based on the content of the "Days" column (change index if needed)
      rows.sort((a, b) => {
        const dayA = a.cells[2].textContent.trim();
        const dayB = b.cells[2].textContent.trim();

        // Adjust the sorting order based on your preference (e.g., Monday first)
        const daysOrder = ['Monday','Tuesday','Wednesday','Thrusday'];

        return daysOrder.indexOf(dayA) - daysOrder.indexOf(dayB);
      });

      // Remove all existing rows from the table
      rows.forEach(row => tbody.removeChild(row));

      // Append the sorted rows to the table
      rows.forEach(row => tbody.appendChild(row));
    }

    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('downloadPdfBtn').addEventListener('click', generatePDF);
      sortTableByDay(); // Call the function to initially sort the table
    });
  </script>
</head>
<body>


         <?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

         ?>

				<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-12">
			<h1 class="page-header">List of Class Schedule 
       		 <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean' ) { ?>
               <a href="index.php?view=add" class="btn btn-primary btn-xs">
            <i class="fa fa-plus-circle fw-fa"></i> New
               </a>
             <button id="downloadPdfBtn" class="btn btn-success btn-xs">
             <i class="fa fa-download fw-fa"></i> Download as PDF
             </button>
        	<?php } ?>
      		</h1>
		 </div> 
    </div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>Class Code</th>
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Time</th>
				  		<th>Days</th> 
				  		<th>Subject</th>
				  		
				  		<th>Faculty </th>
				  		<th>Course and Year/Section</th>
				  		<th>Room</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  // ``, ``, ``, ``, ``, ``, `empid`, `crs_yr`, `sched_room`
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");

				  	if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean' ) {
				  		# code...
				  		$sql="SELECT * FROM `tblclass` c, tblsubject s WHERE CLASSCODE=SUBJ_CODE   GROUP BY CONCAT(CLASSCODE,SCHEDTIME)";
				  	}else{
				  		$sql="SELECT * FROM `tblclass` c, tblsubject s WHERE CLASSCODE=SUBJ_CODE  AND ACCOUNT_USERNAME='". $_SESSION['ACCOUNT_NAME'] ."' GROUP BY CONCAT(CLASSCODE,SCHEDTIME,SCHEDTIMEto)";

				  	}
				  		
				  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->CLASSCODE.'</a></td>';
				  		echo '<td>'. $result->SCHEDTIME.'-'. $result->SCHEDTIMEto.'</td>';
				  		echo '<td>'. $result->SCHEDDAY.'</td>';
				  		echo '<td>' . $result->SUBJ_DESCRIPTION.'</a></td>';
									  		
				  		echo '<td>'. $result->ACCOUNT_USERNAME.'</td>';
				  		echo '<td>' . $result->COURSE.' - ' . $result->YEARLEVEL.' / ' . $result->SECTION.'</a></td>';
				  		echo '<td>'. $result->ROOM.'</td>'; 
				  		 if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean') {
				  		 	# code...
				  		 	echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->CLASSID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  	 
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->CLASSID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 
				  					 </td>';
				  		 }else{
				  		 	echo '<td align="center" > 
				  		<a title="View Students" href="index.php"  class="btn btn-primary btn-xs  ">  <span class="fa fa-info fw-fa"></span> Edit/Delete</a>
				  					 </td>';
				  		 }
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>





	




				</div> <!---End of container-->

</body>
</html>