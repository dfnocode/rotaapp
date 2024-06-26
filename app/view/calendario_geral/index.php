<!DOCTYPE html>
<html>

<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<?php
require_once('./utils/auth.php');


$sql = "SELECT id, title, description, start, end, color FROM events ";

$req = $auth->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!-- FullCalendar -->
<link href='css/fullcalendar.min.css' rel='stylesheet' />
    <!-- Bootstrap Core CSS -->
	
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>


    <!-- Custom CSS -->
    
	 <style>
    
	#calendar {
		max-width: 1200px;
	}
	.nocheckbox {
    display: none;
}

.label-on {
    border-radius: 3px;
    background: red;
    color: #ffffff;
    padding: 10px;
    border: 1px solid red;
    display: table-cell;
}

.label-off {
    border-radius: 3px;
    background: white;
    border: 1px solid red;
    padding: 10px;
    display: table-cell;
}
	
	  #calendar a.fc-event {
  color: #fff; /* bootstrap default styles make it black. undo */
  background-color: #0065A6;
}
</style>

<body class="sidebar-mini sidebar-collapse dataTables bootstrap4">
    <!-- Site wrapper -->
    <div class="wrapper" style="display: contents;">
        <!-- Navbar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/navbar.php';
    include_once($path);
   
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/sidebar.php';
    include_once($path);
   ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- CORPO DA PAGINA -->
            <section class="content">
            
    <!-- Page Content -->
    <div class="container">

<div class="row">
    <div class="col-lg-12 text-center">
    <div style="height:20px"></div>
        <div id="calendar" class="col-centered">
        </div>
    </div>
    
</div>
<!-- /.row -->
<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form class="form-horizontal" method="POST" action="./core/add-event.php">
    
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Add Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
          </div>
          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
              <select name="color" class="form-control" id="color">
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                  <option style="color:#000;" value="#000">&#9724; Black</option>
                  
                </select>
            </div>
          </div>
          <div class="container">
          <div class="row">
          <div class="form-group">
            <label for="start" class="col-sm-12 control-label">Start date</label>
            <div class="col-sm-12">
              <input type="text" name="start" class="form-control" id="start" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="end" class="col-sm-12 control-label">End date</label>
            <div class="col-sm-12">
              <input type="text" name="end" class="form-control" id="end" readonly>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <form class="form-horizontal" method="POST" action="./core/editEventTitle.php">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
          </div>
          <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
              <select name="color" class="form-control" id="color">
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                  <option style="color:#000;" value="#000">&#9724; Black</option>
                  
                </select>
            </div>
          </div>
            <div class="form-group"> 
                <div class="col-sm-2">
                  <label onclick="toggleCheck('check1');" class="label-off" for="check1" id="check1_label">
                  Delete
                </label>
                <input class="nocheckbox" type="checkbox" id="check1" name="delete">
                </div>
            </div>
            <script>
            function toggleCheck(check) {
                if ($('#'+check).is(':checked')) {
                    $('#'+check+'_label').removeClass('label-on');
                    $('#'+check+'_label').addClass('label-off');
                } else {
                    $('#'+check+'_label').addClass('label-on');
                    $('#'+check+'_label').removeClass('label-off');
                }
            }		  
            </script>
          <input type="hidden" name="id" class="form-control" id="id">
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

</div>
<!-- /.container -->
            </section>


        </div>
        <!-- /.content-wrapper -->
        <?php
            $path = dirname(__FILE__);
            $path .= '/../../includes/UI/footer.php';
            include_once($path);
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    </div>
    <!-- jQuery -->
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../includes/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../includes/dist/js/demo.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    
    <!-- jQuery Version 1.11.1 -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
	<script src='js/moment.min.js'></script>
    <script
  src="https://code.jquery.com/jquery-1.9.1.min.js"
  integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="
  crossorigin="anonymous"></script>
	
	<!-- FullCalendar -->
	<script src='js/fullcalendar.min.js'></script>
	
	 <!-- Bootstrap Core JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
	

    <script>

$(function() {
   
   $('#calendar').fullCalendar({
       header: {
           left: 'prev,next,today',
           center: 'title',
           right: 'month,agendaWeek,agendaDay,listWeek'
       },
       height: 590,
       businessHours: {
         dow: [ 1, 2, 3, 4, 5 ],

         start: '6:00',
         end: '22:00',
       },
       nowIndicator: true,
       //now: '2020-12-11T11:15:00', //remove - only for demo
       scrollTime: '08:00:00',
       defaultDate: new Date(), // Use this line to use the current date: new Date(),
       editable: true,
       navLinks: true,
       eventLimit: true, // allow "more" link when there are too many events
       selectable: true,
       selectHelper: true,
       select: function(start, end) {
           
           $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
           $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
           $('#ModalAdd').modal('show');
       },
       eventAfterRender: function(eventObj, $el) {
           var request = new XMLHttpRequest();
           request.open('GET', '', true);
           request.onload = function () {
               $el.popover({
                   title: eventObj.title,
                   content: eventObj.description,
                   trigger: 'hover',
                   placement: 'top',
                   container: 'body'
               });
           }
       request.send();
       },

       eventRender: function(event, element) {
           element.bind('click', function() {
               $('#ModalEdit #id').val(event.id);
               $('#ModalEdit #title').val(event.title);
               $('#ModalEdit #description').val(event.description);
               $('#ModalEdit #color').val(event.color);
               $('#ModalEdit').modal('show');
           });
       },
       eventDrop: function(event, delta, revertFunc) { // si changement de position

           edit(event);

       },
       eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

           edit(event);

       },
       events: [
       <?php foreach($events as $event): 
       
           $start = explode(" ", $event['start']);
           $end = explode(" ", $event['end']);
           if($start[1] == '00:00:00'){
               $start = $start[0];
           }else{
               $start = $event['start'];
           }
           if($end[1] == '00:00:00'){
               $end = $end[0];
           }else{
               $end = $event['end'];
           }
       ?>
           {
               id: '<?php echo $event['id']; ?>',
               title: '<?php echo $event['title']; ?>',
               description: '<?php echo $event['description']; ?>',
               start: '<?php echo $start; ?>',
               end: '<?php echo $end; ?>',
               color: '<?php echo $event['color']; ?>',
           },
       <?php endforeach; ?>
       ]
   });
   
   function edit(event){
       start = event.start.format('YYYY-MM-DD HH:mm:ss');
       if(event.end){
           end = event.end.format('YYYY-MM-DD HH:mm:ss');
       }else{
           end = start;
       }
       
       id =  event.id;
       
       Event = [];
       Event[0] = id;
       Event[1] = start;
       Event[2] = end;
       
       $.ajax({
        url: './core/edit-date.php',
        type: "POST",
        data: {Event:Event},
        success: function(rep) {
               if(rep == 'OK'){
                   alert('Saved');
               }else{
                   alert('Could not be saved. try again.'); 
               }
           }
       });
   }
   
});

</script>


</body>

</html>