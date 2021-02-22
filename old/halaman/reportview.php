<?php
  $id=$_GET["id"];
  $sql = "SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store3.name,tipecomplain.nm_tipecomplain,produkreview.nm_review,produkdev.nm_dev,impression.nm_impression FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store3 on complainusers.idstore=store3.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id left JOIN produkreview on produkreview.id_rev=complainusers.id_productreview left join produkdev on produkdev.id_dev=complainusers.id_productdev left join impression on impression.id_impression=complainusers.id_impression  WHERE complainusers.id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<script>
  function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
			location.reload();
			window.reload();
			// var winPrint = window.open('', '', 'left=0,top=0,width=800,height=600,toolbar=0,scrollbars=0,status=0');
			// winPrint.document.write(printContents);
			// winPrint.document.close();
			// winPrint.focus();
			// winPrint.print();
			// winPrint.close(); 
  }
</script>
<head>
    <link href='icon.jpg' rel='shortcut icon'>
    <div id="wrapper">
    <div id="page-wrapper">
<div class="row">
    <div class="col-lg-10">
			<a style="float:right;" class="btn btn-xs btn-danger text-center" href="home.php?page=Complaint">
				<i class="ace-icon fa fa-close"></i>
      </a>
      <a style="float:right;" class="btn btn-xs btn-primary text-center" onclick="printDiv('report_print')">
				<i class="ace-icon fa fa-print"></i>
      </a>
      <div id="report_print" style="margin-top:20px">
        <h5><center> PT. GREAT GIANT LIVESTOCK </center></h5>
        <img src="logo.jpg" style="font-weight:normal;padding:2px;width:50px;height:45px">
        <hr style="margin-top:10px;margin-bottom:1px;border-width:0.7px;border-color:black;"/>
        <table id="dataTables-example" width="100%" >
					<thead>
						<tr>									
							<th style="text-align:right" colspan="6">FORM CUSTOMER COMPLAINT</th>
						</tr> 
						<tr>
							<th style="text-align:center;width:15%">C-DQA.01</th>									
							<th style="font-weight:normal;padding:2px;width:1%"></th>					
							<th style="font-weight:normal;padding:2px;width:20%"></th>					
							<th style="font-weight:normal;">Rev: 0</th>									
							<th style="font-weight:normal;">Publish :</th>
						</tr>
						</table>
						<hr style="margin-top:3px;margin-bottom:3px;border-width:1px;border-color:black;"/>
						<table id="dataTables-example" width="100%" >
						<tr>
							<th style="font-weight:normal;">To </th>									
							<th style="font-weight:normal;">:</th>									
							<th style="font-weight:normal;"colspan="4">Quality Assurance</th>									
						</tr> 
						<tr>
							<th style="font-weight:normal;">CC </th>									
							<th style="font-weight:normal;">:</th>									
							<th style="font-weight:normal;"colspan="4">- Dept & Head Production</th>									
						</tr> 
						<tr>
							<th ></th>									
							<th ></th>									
							<th style="font-weight:normal;" colspan="4">- QA Manager</th>									
						</tr> 
					</thead>
				</table>
        <hr style="margin-top:1px;margin-bottom:10px;border-width:1px;border-color:black;"/>
        <table width="100%" >
					<thead> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Date</th>									
							<th style="font-weight:normal;padding:2px;width:2%;">:</th>									
							<th style="font-weight:normal;padding:2px;width:30%;"><?php echo $row['tanggal'];?></th>									
							<th style="font-weight:normal;padding:2px;width:33%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;"></th>
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Customer Service</th>									
							<th style="font-weight:normal;padding:2px;width:%;">:</th>									
							<th style="font-weight:normal;padding:2px;width:30%;"></th>									
							<th style="font-weight:normal;padding:2px;width:33%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;"></th>
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Source of Complaint</th>									
							<th style="font-weight:normal;padding:2px;width:2%;">:</th>									
							<th style="font-weight:normal;padding:2px;width:30%;"><?php echo $row['nm_portal'];?></th>									
							<th style="font-weight:normal;padding:2px;width:33%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;"></th>
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Type of Complaint</th>									
							<th style="font-weight:normal;padding:2px;width:2%;">:</th>									
							<th style="font-weight:normal;padding:2px;width:30%;"><?php echo $row['nm_tipecomplain'];?></th>									
							<th style="font-weight:normal;padding:2px;width:33%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;"></th>
						</tr> 
					</thead>
        </table>
        
        <table style="margin-top:20px;" width="100%" class="table table-bordered" >
					<thead>
						<tr>								
							<th colspan="7" style="background-color:#a8a8a8;font-weight:bold;padding:2px;text-align:center;" >CUSTOMER INFORMATION</th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Name</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['nama'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Contact No</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['telp'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Address</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['alamat'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Product / Batch Code</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['nm_produk']; echo " / "; echo $row['expdate'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Lokasi Pembelian (Nama Channel, Lokasi Channel)</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['name'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Date of Purchase</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['datapurcase'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Date of Opening Product</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['dateopening'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Date of Product Defect</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['datedefect'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Detail Complaint</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"><?php echo $row['komen'];?></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Documentation</th>									
							<th style="font-weight:normal;padding:2px;"colspan="6"></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:30%;">Follow Up Replacement</th>									
							<th style="font-weight:normal;padding:2px;width:3%;">
                <?php 
                  if($row['resolved']=='Ya'){ ?>
                    <i class="fa fa-check"></i>
                <?php } ?>
              </th>									
							<th style="font-weight:normal;padding:2px;width:20%;">Done</th>									
							<th style="font-weight:normal;padding:2px;width:3%;">
                <?php 
                  if($row['resolved']=='Tidak'){ ?>
                    <i class="fa fa-check"></i>
                <?php } ?>
              </th>									
							<th style="font-weight:normal;padding:2px;width:20%;">Not yet</th>
							<th style="font-weight:normal;padding:2px;width:3%;">
                <?php 
                  if($row['resolved']=='Pending'){ ?>
                    <i class="fa fa-check"></i>
                <?php } ?>
              </th>									
							<th style="font-weight:normal;padding:2px;width:21%;">Pending</th>
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Date of Replacement</th>									
							<th colspan="6">
                <?php if($row['date_solved']=='0000-00-00'){
                  
                }else{
                  echo $row['date_solved'];
                }?>
              </th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Follow Up (Date)</th>									
							<th colspan="6"></th>									
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;">Record Case Production</th>									
							<th colspan="6"></th>									
						</tr> 
					</thead>
          <table width="100%" >
					<thead> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;"></th>									
							<th style="font-weight:normal;padding:2px;width:3%;"></th>									
							<th style="font-weight:normal;padding:2px;width:20%;"></th>									
							<th style="font-weight:normal;padding:2px;width:3%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;"><hr style="margin-top:20px;margin-bottom:5px;border-width:1px;border-color:black;"/></th>
						</tr> 
						<tr>								
							<th style="font-weight:normal;padding:2px;width:20%;"></th>									
							<th style="font-weight:normal;padding:2px;width:3%;"></th>									
							<th style="font-weight:normal;padding:2px;width:20%;"></th>									
							<th style="font-weight:normal;padding:2px;width:3%;"></th>									
							<th style="font-weight:normal;padding:2px;width:15%;text-align:center;">Sales</th>
						</tr> 
					</thead>
        </table>
      </div>
    </div>
</div>