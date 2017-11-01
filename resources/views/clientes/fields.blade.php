
                                <div class="form-group"><label>Nome</label> <input type="text" placeholder="Nome do Cliente" name="nome" class="form-control"></div>
                                <div class="form-group"><label>Tipo de Cliente</label>
                                <select class="form-control m-b" name="tipo_cliente">
                                        <option>Seleccione</option>
                                        <option value="Agricultor">Agricultor</option>
                                        <option value="Avicultor">Avicultor</option>
                                    </select>
 
                                </div>
                                <div class="form-group"><label>Nuit</label> <input type="text" placeholder="NUIT" name="nuit" class="form-control"></div>
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <div class="form-group">
                                        <input type="text" name="telefone" class="form-control" data-mask="(258) 99-99-99-999">
                                    </div>
                                </div>
                                <div class="form-group"><label>Endereço</label> <input type="text" name="endereco" placeholder="Introduza o endereço" class="form-control"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Preview image</h4>
                                    <div class="img-preview img-preview-sm"><img src="img/p3.jpg"></div><br>
                                    <div class="btn-group">
                                        <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                            Upload new image
                                        </label>
                                        <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Gravar</strong></button>
                            </div>