
<div class="container p-3">
	<div class="row no-gutters justify-content-center">
		<div class="col-10">
            <!--Form with header-->
            <form action="mail" method="post">
                <div class="card" style="border-radius: 5px; border-color: #0a3b06;">
                    <div class="card-header p-0">
                        <div class="text-center py-2" style="background-color: #B6FFA9; color: #0a3b06; border-radius: 5px 5px 0px 0px;">
                            <h3><i class="fa fa-envelope mr-2"></i>Contato por E-mail</h3>
                            <p class="m-0">Envie sua dúvida</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user" style="color: #0a3b06;"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope" style="color: #0a3b06;"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment" style="color: #0a3b06;"></i></div>
                                </div>
                                <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons" style="color: #0a3b06; font-size: 18px;">message</i></div>
                                </div>
                                <textarea name="menssagem" id="menssagem" class="form-control" placeholder="Escreva sua Mensagem" required></textarea>
                            </div>
                        </div>
                        <div class="row no-gutters justify-content-center">
                            <div class="col-4 text-center mr-3 font-weight-light">
                                <input type="submit" value="Enviar" id="enviar" class="btn btn-block rounded py-2" style="background-color: #0a3b06; color: #fff; font-weight: bold;">
                            </div>
                            <div class="col-4 text-center">
                                <input type="reset" value="Cancelar" class="btn btn-block rounded py-2" style="background-color: #cc0000; color: #fff; font-weight: bold;">
                            </div>
                        </div>
                        
                    </div>

                </div>
            </form>
            <!--Form with header-->


        </div>
	</div>
</div>