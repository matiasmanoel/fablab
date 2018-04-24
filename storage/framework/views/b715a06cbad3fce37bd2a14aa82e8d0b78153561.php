<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        background-image: url(https://wallpaperscraft.com/image/light_faded_background_85547_2560x1600.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>


<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agendamento</div>

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                <div class="card-body">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Novo Agendamento</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Editar Agendamento</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Remover Agendamento</button>

                    <!-- Novo Agendamento -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Novo Agendamento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <label for="email_requisitante" class="control-label">E-mail do Requisitante:</label>
                                <input type="text" class="form-control" id="email_requisitante" name="email_requisitante" value="<?php echo e(old('email_requisitante')); ?>" placeholder="seuemail@exemplo.com">
                              </div>
                              <!-- <div class="form-group">
                                <label for="data_visita" class="control-label">Data e Hora para visita:</label>
                                <div class="form-row">
                                <div class="col-xs-5">
                                  <input type="date" id="data_visita" name="data_visita" value="<?php echo e(old('data_visita')); ?>" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                  <input type="time" id="hora_visita" name="hora_visita" value="<?php echo e(old('hora_visita')); ?>" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="control-label">Selecione sua Impressora:</label><br>
                              <input type="radio" name="impressora" value="1"> Impressora 1<br>
                              <input type="radio" name="impressora" value="2"> Impressora 2<br>
                              <input type="radio" name="impressora" value="3"> Impressora 3<br>
                            </div>
                              <div class="form-group">
                                <label for="observacao" class="control-label">Observação:</label>
                                <textarea class="form-control" id="observacao" name="observacao" value="<?php echo e(old('observacao  ')); ?>"></textarea>
                              </div> -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>

                    <!-- Edição de Agendamento
                        *****AQUI A IDEIA É QUE QUANDO ELE ENTRE NESSA ABA, A ABA INFORME OS HORÁRIOS CADASTRADOS, ASSIM, ELE SELECIONA UM E EDITA.*****
                   -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Editar Agendamento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">E-mail do Requisitante:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="seuemail@exemplo.com">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Data e Hora para visita:</label>
                                <div class="form-row">
                                <div class="col-xs-5">
                                  <input type="date" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                  <input type="time" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="control-label">Selecione sua Impressora:</label><br>
                              <input type="radio" name="impressora" value="1"> Impressora 1<br>
                              <input type="radio" name="impressora" value="2"> Impressora 2<br>
                              <input type="radio" name="impressora" value="3"> Impressora 3<br>
                            </div>
                              <div class="form-group">
                                <label for="message-text" class="control-label">Observação:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Excluir Agendamento
                          *****AQUI A IDEIA É QUE QUANDO ELE ENTRE NESSA ABA, A ABA INFORME OS HORÁRIOS CADASTRADOS, ASSIM, ELE SELECIONA UM E REMOVE.*****
                   -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Remover Agendamento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Seus Agendamentos:</label><br>
                                <input type="radio" name="impressora" value="1">Seu Agendamento 1<br>
                                <input type="radio" name="impressora" value="2">Seu Agendamento 2<br>
                                <input type="radio" name="impressora" value="3">Seu Agendamento 3<br>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Remover</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <script>
                    $('#exampleModal').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget) // Button that triggered the modal
                      var recipient = button.data('whatever') // Extract info from data-* attributes
                      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                      var modal = $(this)
                      modal.find('.modal-title').text('New message to ' + recipient)
                      modal.find('.modal-body input').val(recipient)
                    })
                  </script>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<!-- <form>
  <h4>Entre com uma data (OBS: Segunda a Sexta!!)</h4>
  <input type="date"></input>

  <h4>Hora:(**A CONFERIR COMO SERA O PADRÃO DE HORAS PARA ACESSO DO LAB)</H4>
    <input type="time"></input>
    <h4>SE horario disponivel com alguma impressora livre = MOSTRAR qual/quais impressoras livres</h4>
    <h4>Selecione uma impressora disponivel:</h4>
    <input type="radio" name="impressora" value="1"> Impressora 1<br>
    <input type="radio" name="impressora" value="2"> Impressora 2<br>
    <input type="radio" name="impressora" value="3"> Impressora 3<br><br>
    <input type="submit" class="btn btn-info" value="Confirmar">
</form> -->


<!-- if (date $$ time $$ impressora1 == ocupado/true){
    show ("impressora 1 está ocupada")
} -->

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>