<div class="container-fluid">
    <div class="row no-gutters justify-content-center my-3">
        <div class="col-12 text-center my-3">
            <h4>Gerenciar Categorias</h4>
        </div>
        <div class="col-8">
            <form class="form-inline" name="inserircategoria" method="post" action="" enctype="multipart/form-data">
                <div class="form-group col-8">
                    <input type="text" name="cate_nome" id="cate_nome" class="form-control w-100" placeholder="Nome da Categoria" required>
                </div>
                <div class="form-group ml-3 float-right">
                    <button name="cate_nova" value="cate_nova" class="btn btn-outline-success">Inserir Nova</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="col-8">
            <table class="table table-bordered" style="width: 90%">
                {foreach from=$CATEGORIAS item=C}
                <form name="categorias_editar" method="post" action="">
                    <tr>
                        <td class="col-7">
                            <input type="text" name="cate_nome" value="{$C.cate_nome}" class="form-control" required>
                            <input type="hidden" name="cate_id" value="{$C.cate_id}">
                        </td>
                        <td>
                            <button class="btn btn-success" name="cate_editar" value="cate_editar">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" name="cate_apagar" value="cate_apagar">Apagar</button>
                        </td>
                    </tr>
                </form>
                {/foreach}
            </table>
        </div>
    </div>
</div>