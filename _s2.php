<style>
    .spaceo{
        height: 80px;
    }
</style> 
<div class="container-fluid">   
      <div class="row">
            <div class="col-sm-12">        
            <div class="spaceo">&nbsp;</div>
             <!-- Trigger the modal with a button -->
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ingresar solicitud</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Formulario para el ingreso para la solicitud de Bienes o Servicios</h4>
                    </div>
                    <div class="modal-body">
                               <form role="form" method="post" action="?alm=_s2">
                               <div class="form-group">               
                                    <label><?php echo $nom ; echo $ape ; ?></label>                           
                                <input type="hidden" name="uni_suser" value="<?php echo $depto;?>">                                    
                                <input type="hidden" name="soli_suser" value="<?php echo $ide;?>">
                                </div>                                 
                                <div class="form-group">
                                <input type="text" name="pues_suser" value="Asistente" class="form-control" id="exampleInputEmail1" placeholder="Asistente" >
                                </div>                                   
                                  <div class="form-group"> <!-- Date input -->
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                                  
                                   </div>                                 
                                  <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Fecha de Kardex</label>
                                    <input class="form-control" id="date" name="fecho_fac" value="<?php echo $row['fecho_fac'];?>" type="text"/>
                                  </div>                                  
                                        <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_pers'];?>" name="id_pers" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                              </form>  
                                <script>
                                    $(document).ready(function(){
                                      var date_input=$('input[name="fecho_fac"]'); //our date input has the name "date"
                                      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                      var options={
                                        format: 'dd/mm/yyyy',
                                        container: container,
                                        todayHighlight: true,
                                        autoclose: true,
                                      };
                                      date_input.datepicker(options);
                                    })                 
                                </script>                                  
                      <p>This is a large modal.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
     </div>
</div>